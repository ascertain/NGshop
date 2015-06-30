<?php
class RatingsComments_Plugin extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface
{

    public static function install() {
        Pimcore_API_Plugin_Abstract::getDb()->query("CREATE TABLE IF NOT EXISTS `plugin_ratingscomments_ratings` (
    		`id` INT NOT NULL AUTO_INCREMENT,
            `type` ENUM( 'object', 'asset', 'document' ) NOT NULL ,
    		`targetId` INT NOT NULL ,
    		`rating` INT NOT NULL ,
    		`comment` TEXT NULL ,
    		`title` VARCHAR(255) NULL ,
    		`name` VARCHAR(255) NULL ,
    		`metadata` TEXT NULL ,
            `classname` VARCHAR(255) NULL ,
    		`date` INT NOT NULL ,
    	    PRIMARY KEY  (`id`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        Pimcore_API_Plugin_Abstract::getDb()->query("ALTER TABLE `plugin_ratingscomments_ratings` ADD INDEX (classname), ADD INDEX (targetId)");

        if (self::isInstalled()) {
            $statusMessage = "Rating Plugin successfully installed.";
        } else {
            $statusMessage = "Rating Plugin could not be installed";
        }
        return $statusMessage;

    }

    public static function uninstall() {
        Pimcore_API_Plugin_Abstract::getDb()->query("DROP TABLE `plugin_ratingscomments_ratings`");

        if (!self::isInstalled()) {
            $statusMessage = "Rating Plugin successfully uninstalled.";
        } else {
            $statusMessage = "Rating Plugin could not be uninstalled";
        }
        return $statusMessage;
    }

    public static function isInstalled() {
        try {
            $result = Pimcore_API_Plugin_Abstract::getDb()->describeTable("plugin_ratingscomments_ratings");
        }
        catch (Exception $e) {
            $result = null;
        }
        return !empty($result);
    }

    public static function getTranslationFile($language) {
        if (is_file(PIMCORE_PLUGINS_PATH . "/RatingsComments/texts/" . $language . ".csv")) {
            return "/RatingsComments/texts/" . $language . ".csv";
        } else {
            return "/RatingsComments/texts/en.csv";
        }
    }

    /**
     * Deletes all ratings if the document is deleted
     * @param Document $document
     */
    public function preDeleteDocument(Document $document)
    {
        $this->deleteAllForTarget($document);
    }

    /**
     * Deletes all ratings if the object is deleted
     * @param Object_Abstract $object
     */
    public function preDeleteObject(Object_Abstract $object)
    {
        $this->deleteAllForTarget($object);
    }

    /**
     * Deletes all ratings if the asses is deleted
     * @param Asset $asset
     */
    public function preDeleteAsset(Asset $asset)
    {
        $this->deleteAllForTarget($asset);
    }

    /**
     * Deletes all ratings for a given target
     * @param Pimcore_Model_WebResource_Interface $target
     */
    private function deleteAllForTarget($target)
    {

        $resourceRating = new RatingsComments();
        $resourceRating->setTarget($target);
        $resourceRating->deleteAllForTarget();

    }

    /**
         *
         * @param integer $value
         * @param integer $date
         * @param Pimcore_Model_WebResource_Interface $target
         * @param Object_Abstract $user
         */
        public static function postRating($value, $comment, $title, $name, $target, $metadata = null, $spamCheck = null)
        {
            if (!$spamCheck) {
                $type = self::getTypeFromTarget($target);
                if (!empty($type)) {

                    $comment = htmlentities(strip_tags($comment), ENT_COMPAT | ENT_HTML401, "UTF-8");
                    $title= htmlentities(strip_tags($title), ENT_COMPAT | ENT_HTML401, "UTF-8");
                    $name = htmlentities(strip_tags($name), ENT_COMPAT | ENT_HTML401, "UTF-8");

                    $comment = $comment == '' ? null : $comment;
                    $title = $title == '' ? null : $title;
                    $name = $name == '' ? null : $name;

                    $rating = new RatingsComments();
                    $rating->setTarget($target);
                    $rating->setRating(intval($value));
                    $rating->setDate(time());
                    $rating->setType($type);
                    $rating->setComment($comment);
                    $rating->setTitle(($title));
                    $rating->setName($name);
                    $rating->setMetadata($metadata);
                    if ($target instanceof Object_Abstract) {
                        $rating->setClassname($target->getO_className());
                    }
                    $rating->save();
                } else {
                    logger::log("Rating_Plugin: Could not post rating, unknown resource", Zend_Log::ERR);
                }
            }
        }

    /**
     * @param Pimcore_Model_WebResource_Interface $target
     * @return integer amount
     */
    public static function getRatingValueForTarget($target)
    {
        $type = self::getTypeFromTarget($target);

        $rating = new RatingsComments();
        $rating->setTarget($target);
        $rating->setType($type);
        return $rating->getRatingValueForTarget();
    }

    /**
     *
     * @param Pimcore_Model_WebResource_Interface $target
     * @return integer
     */
    public static function getRatingAmountForTarget($target)
    {
        $type = self::getTypeFromTarget($target);

        $rating = new RatingsComments();
        $rating->setTarget($target);
        $rating->setType($type);
        return $rating->getRatingAmountForTarget();
    }

    /**
     * @param Pimcore_Model_WebResource_Interface $target
     * @return array
     */
    public static function getRatingAverageForTarget($target)
    {
        $type = self::getTypeFromTarget($target);

        $rating = new RatingsComments();
        $rating->setTarget($target);
        $rating->setType($type);

        return $rating->getRatingAverageForTarget($target, $type);
    }


    /**
     *
     * @param Pimcore_Model_WebResource_Interface $ratingTarget
     * @param User $user
     */
    public static function hasRated($ratingTarget, $user)
    {
        $type = self::getTypeFromTarget($ratingTarget);
        return Resource_Rating::hasRated($ratingTarget, $type, $user);
    }

    public static function getComments($target, $limit = null, $withoutRatings = false) {
        $type = self::getTypeFromTarget($target);

        $comments = new RatingsComments_List();
        if ($withoutRatings) {
            $comments->setCondition('targetId = ' . $target->getId() . ' AND type = \'' . $type . '\' AND comment IS NULL');
        } else {
            $comments->setCondition('targetId = ' . $target->getId() . ' AND type = \'' . $type . '\' and (title is not null or (comment is not null and comment != \'\'))');
        }
        $comments->setOrderKey('date');
        $comments->setOrder('desc');
        if ($limit != null) {
            $comments->setLimit($limit);
        }
        $comments->load();

        return $comments->getComments();
    }

    public static function getAllComments($limit, $start) {

        $comments = new RatingsComments_List();
        $comments->setLimit($limit);
        $comments->setOffset($start);
        $comments->setOrderKey('date');
        $comments->setOrder('desc');
        $comments->load();

        return $comments->getComments();
    }

    public function deleteComment($id) {
        $comment = RatingsComments::getById($id);
        $comment->delete();
    }

    /**
     *
     * @param Pimcore_Model_WebResource_Interface $target
     */
    private static function getTypeFromTarget($target)
    {
        $type = "";
        if ($target instanceof Document) {
            $type = "document";
        } else if ($target instanceof Asset) {
            $type = "asset";
        } else if ($target instanceof Object_Abstract) {
            $type = "object";
        }
        return $type;
    }
}
