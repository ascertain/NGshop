<?php

class RatingsComments extends Pimcore_Model_Abstract
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var int $rating
     */
    public $rating;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $classname;

    /**
     *
     * @var integer
     */
    public $date;

    /**
     *
     * @var Pimcore_Model_WebResource_Interface $ratingTarget
     */
    public $target;

    /**
     * @param int $targetId
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
        try {
            if ($this->type == "object") {
                $this->target = Object_Abstract::getById($targetId);
            } else if ($this->type == "asset") {
                $this->target = Asset::getById($targetId);
            } else if ($this->type == "document") {
                $this->target = Document::getById($targetId);
            } else {
                Logger::log(get_class($this) . ": could not set resource - unknown type[" . $this->type . "]");
            }
        } catch (Exception $e) {
            Logger::log(get_class($this) . ": Error setting resource");
        }
    }

    /**
     * @return int
     */
    public function getTargetId() {
        return $this->targetId;
    }

    /**
     * @param string $classname
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;
    }

    /**
     * @return string
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param int $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param Pimcore_Model_WebResource_Interface $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
        $this->targetId = $target->getId();
    }

    /**
     * @return Pimcore_Model_WebResource_Interface
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    public function getResource()
    {

        if (!$this->resource) {
            $this->initResource("RatingsComments");
        }
        return $this->resource;
    }

    /**
     * @return void
     */
    public function save()
    {

        if ($this->getId()) {
            $this->update();
        }
        else {
            $this->getResource()->create();
            $this->update();

        }
    }

    public function delete()
    {
        $this->getResource()->delete();
    }


    /**
     * Deletes all ratings for current target
     */
    public function deleteAllForTarget()
    {
        $this->getResource()->deleteAllForTarget();
    }

    /**
     * Get Average per Rating Value
     * @return integer $average
     *
     */
    public function getRatingAverageForTarget()
    {
        return $this->getResource()->getRatingAverageForTarget();
    }

    /**
     *
     * @param Pimcore_Model_WebResource_Interface $ratingTarget
     * @param string $type
     * @param Object_Abstract $user
     * @return boolean
     */
    public static function hasRated($ratingTarget, $type, $user)
    {
        return Resource_Rating_Resource_Mysql::hasRated($ratingTarget, $type, $user);
    }

    /**
     *
     * @return integer $value
     *
     */
    public function getRatingValueForTarget()
    {
        return $this->getResource()->getRatingValueForTarget();
    }


    /**
     * @return integer $amount
     */
    public function getRatingAmountForTarget()
    {
        return $this->getResource()->getRatingAmountForTarget();
    }


    /**
     * @param string $classname
     * @param string $type
     * @return interger $amount
     */
    public static function getTotalRatingsForTargetType($type, $classname = null)
    {
        return Resource_Rating_Resource_Mysql::getTotalRatingsForTargetType($type, $classname);
    }

    /**
     *
     * @param int $id
     */
    public static function getById($id)
    {
        $comment = new RatingsComments();
        $comment->getResource()->getById($id);
        return $comment;
    }
}
