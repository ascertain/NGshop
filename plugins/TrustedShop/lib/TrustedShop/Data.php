<?php
/**
 * Created by PhpStorm.
 * User: ckogler
 * Date: 18.11.2014
 * Time: 18:14
 */
namespace TrustedShop;
use Pimcore\Model\Object;
class Data {

    public $shopConfig;

    /**
     * @return mixed|\Zend_Db_Adapter_Abstract
     */
    protected function getDb(){
        return \Pimcore\Resource::get();
    }
    /**
     * @return mixed
     */
    public function getShopConfig()
    {
        return $this->shopConfig;
    }

    /**
     * @param mixed $shopConfig
     * @return $this
     */
    public function setShopConfig($shopConfig)
    {
        $this->shopConfig = $shopConfig;
        return $this;
    }

    protected function getObjectTable(){
        $object = new Object\TrustedShopReview();
        return 'object_' . $object->getClass()->getId();
    }

    /**
     * @var $shopConfig Object\ShopConfiguration
     */
    public function getOverallRating(){
        $query = "SELECT count(*) FROM " . $this->getObjectTable()." where shopConfig__id = " . $this->getShopConfig()->getId() . " AND o_published=1 ";
        $total = $this->getDb()->fetchOne($query);

        $query= "SELECT sum(mark/529) FROM " . $this->getObjectTable() . " where shopConfig__id = ". $this->getShopConfig()->getId() ." AND o_published=1";
        $rating = $this->getDb()->fetchOne($query);
        return round($rating,2);
    }

    public function getTopRatings($minRating,$limit,$withinLastDays = 60){
        $ratingList = new Object\TrustedShopReview\Listing();

        $reviewChangeDate = time()-(3600*24*$withinLastDays);
        $ratingList->setCondition("shopConfig__id = ? AND reviewChangeDate > ? AND mark >= ? ",array($this->getShopConfig()->getId(),$reviewChangeDate,$minRating));
        if($limit){
            $ratingList->setLimit($limit);
        }

        $ratingList->setOrderKey("RAND()", false);

        return $ratingList;
    }
}