<?php
namespace TrustedShop;

use \Pimcore;
use \Pimcore\Model\Object;

class Importer  {

    protected $logger;

    protected $logToConsole;

    const COMPONENT = "TrustedShop Importer";


    public function __construct() {
       $this->logger = Logging::getInstance();

        $this->client = \Pimcore\Tool::getHttpClient();

        $overrideConfig = new \Zend_Config(array(
                "maxredirects" => 5
            )
        );
        $this->client->setConfig($overrideConfig);
    }

    /**
     * @return mixed
     */
    public function getLogToConsole()
    {
        return $this->logToConsole;
    }

    /**
     * @param mixed $logToConsole
     */
    public function setLogToConsole($logToConsole)
    {
        $this->logToConsole = $logToConsole;
    }

    /**
     * @param $shopConfigurations Object\OnlineShopConfiguration
     */
    public function import($shopConfigurations) {
        if ($shopConfigurations && !is_array($shopConfigurations)) {
            $shopConfigurations = array($shopConfigurations);
        }

        $pageSize = 20;
        $page = 0;


        /** @var  $shopConfiguration Object\OnlineShopConfiguration */
        foreach ($shopConfigurations as $shopConfiguration) {
            $importDirectory = $shopConfiguration->getTrustedShopReviewsimportDirectory();
            $startTime = time();

            if ($this->logToConsole) {
                echo("Importing reviews for " . $shopConfiguration->getFullPath() . " ...\n");
            }

            /** @var  $startDate Pimcore\Date */
            $startDate = $shopConfiguration->getLastSync();

            while (true) {
                if ($this->logToConsole) {
                    echo("Page=" . $page . "\n");
                }

                $uri = "https://%s:%s@api.trustedshops.com/rest/restricted/v2/shops/%s/reviews.json?page=" . $page . "&size=" . $pageSize;
                if ($startDate) {
                    $uri .= "&startDate=" . date('Y-m-d', ($startDate->getTimestamp()-3600*24*30)); //get ratins from last 30 days - for some reasons trusted shop sometimes dont show all ratings imediately
                }

                $uri = sprintf($uri, $shopConfiguration->getTrustedShopUser(), $shopConfiguration->getTrustedShopPassword(), $shopConfiguration->getTrustedShopKey());


                if ($this->logToConsole) {
                    echo($uri . "\n");
                }
                $this->client->setUri($uri);

                $result = $this->client->request();

                if ($result->getStatus() != 200) {
                    $this->logger->error("Status code " . $result->getStatus(), null, null, self::COMPONENT);
                    throw new \Exception("Status Code: " . $result->getStatus());
                }

                $body = $result->getBody();

                $data = json_decode($body);
                if (!$data) {
                    $this->logger->error("Could not decode data " . $body, null, null, self::COMPONENT);
                    throw new \Exception("Could not decode data");
                }

                $response = $data->response;
                $data = $response->data;
                $shop = $data->shop;
                if ($shop->tsId != $shopConfiguration->getTrustedShopKey()) {
                    $this->logger->error("Tsid mismatch", null, null, self::COMPONENT);
                    throw new \Exception("Tsid mismatch");
                }

                $reviews = $shop->reviews;

                foreach ((array)$reviews as $review) {
                    $uid = $review->UID;
                    $comment = $review->comment;
                    $criterias = $review->criteria;
                    $consumerEmail = $review->consumerEmail;
                    $mark = $review->mark;
                    $markDescription = $review->markDescription;
                    $orderReference = $review->orderReference;

                    $changeDate = $review->changeDate;
                    $creationDate = $review->creationDate;
                    $confirmationDate = $review->confirmationDate;

                    $changeDate = $changeDate ? strtotime($changeDate) : 0;
                    $creationDate = $creationDate ? strtotime($creationDate) : 0;
                    $confirmationDate = $confirmationDate ? strtotime($confirmationDate) : 0;

                    $fc = new Object\Fieldcollection();
                    foreach ($criterias as $criteria) {
                        $mark = $criteria->mark;
                        $criteriaMarkDescription = $criteria->markDescription;
                        $type = $criteria->type;

                        $item = new Object\Fieldcollection\Data\TrustedShopCriteria();
                        $item->setMark($mark);
                        $item->setMarkDescription($criteriaMarkDescription);
                        $item->setCriteriaType($type);
                        $fc->add($item);

                    }


                    $reviewObject = $this->getReview($shopConfiguration, $uid, $consumerEmail, $creationDate);
                    $reviewObject->setShopConfig($shopConfiguration);
                    $reviewObject->setUid($uid);
                    $reviewObject->setComment($comment);
                    $reviewObject->setConsumerEmail($consumerEmail);
                    $reviewObject->setReviewConfirmationDate(new Pimcore\Date($confirmationDate));
                    $reviewObject->setReviewCreationDate(new Pimcore\Date($creationDate));
                    $reviewObject->setReviewChangeDate(new Pimcore\Date($changeDate));
                    $reviewObject->setMark($mark);
                    $reviewObject->setMarkDescription($markDescription);
                    $reviewObject->setCritera($fc);
                    $reviewObject->setOrderReference($orderReference);

                    if(!$creationDate){
                        $path = '/unknown';
                    }else{
                        $path = '/'.date('Y/m/d',$creationDate);
                    }

                    $path = $importDirectory.$path;
                    $reviewObject->setParent(Object\Service::createFolderByPath($path));
                    $reviewObject->save();
                    if ($this->logToConsole) {
                        echo("Saved review " . $reviewObject->getId() ." " . $reviewObject->getFullPath(). "\n");
                    }

                    $this->logger->info("Updated review " . $reviewObject->getId(), $reviewObject, null, self::COMPONENT);

                    if($page % 5 == 0){
                        \Pimcore::collectGarbage();
                    }
                }

                if (count($reviews) < $pageSize) {
                    break;
                }

                $page++;

            }

            $shopConfiguration->setLastSync(new Pimcore\Date($startTime));

            $shopConfiguration->save();
        }
    }

    protected function getReview(Object\OnlineShopConfiguration $configuration, $uid, $email, $creationDate) {
        $db = \Pimcore\Resource::get();
        $list = new Object\TrustedShopReview\Listing();
        $list->setCondition("uid = " . $db->quote($uid));
        $list->setLimit(1);
        $list->setUnpublished(true);

        $list = $list->load();
        if ($list) {
            $item = $list[0];
        } else {
            $item = new Object\TrustedShopReview();
            $item->setPublished(1);
        }
        $item->setKey(Pimcore\File::getValidFilename($email . "_" . $uid));

        return $item;

    }

    public function importAll() {
        $list = new Object\OnlineShopConfiguration\Listing();
        $list->setUnpublished(true);
        $list->setCondition('trustedShopKey != ""');
        $list = $list->load();
        $this->import($list);
    }

}
