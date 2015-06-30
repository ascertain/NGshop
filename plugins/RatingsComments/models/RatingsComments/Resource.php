<?php

class RatingsComments_Resource extends Pimcore_Model_Resource_Abstract
{
    /**
     * @var RatingsComments
     */
    protected $model;

    /**
     * Contains all valid columns in the database table
     *
     * @var array
     */
    protected $validColumns = array();

    /**
     * Get the valid columns from the database
     *
     * @return void
     */

    public function init()
    {
        $data = $this->db->fetchAll("SHOW COLUMNS FROM plugin_ratingscomments_ratings");
        foreach ($data as $d) {
            $this->validColumns[] = $d["Field"];
        }
    }

    /**
     * @param Element_Interface $ratingTarget
     * @param string $type
     * @return integer $amount
     */
    public function getRatingValueForTarget()
    {
        $data = $this->db->fetchRow("SELECT count(*) as amount from plugin_ratingscomments_ratings where type = ? and targetId = ?", array($this->model->getType(), $this->model->getTargetId()));
        return $data['amount'];
    }

    /**
     * @param Element_Interface $ratingTarget
     * @param string $type
     * @return integer $amount
     */
    public function getRatingAmountForTarget()
    {
        $amountComments = $this->db->fetchOne("SELECT count(*) as amount from plugin_ratingscomments_ratings where type = ? and targetId = ? and comment is not null", array($this->model->getType(), $this->model->getTargetId()));
        $amountRatings = $this->db->fetchOne("SELECT count(*) as amount from plugin_ratingscomments_ratings where type = ? and targetId = ? and comment is null", array($this->model->getType(), $this->model->getTargetId()));
        return array('comments' => $amountComments, 'ratings' => $amountRatings, 'total' => $amountComments + $amountRatings);
    }

    /**
     * @param Element_Interface $ratingTarget
     * @param string $type
     * @return integer $amount
     */
    public function getRatingAverageForTarget()
    {
        $data = $this->db->fetchRow("SELECT avg(rating) as average from plugin_ratingscomments_ratings where type = ? and targetId = ?", array($this->model->getType(), $this->model->getTargetId()));
        return $data['average'];
    }


    /**
     * @param Element_Interface $object
     * @param string $type
     * @return boolean $hasRated
     */
    public static function hasRated($ratingTarget, $type, $user)
    {
        try {
            $db = Pimcore_Resource_Mysql::get("database");
            $data = $db->fetchRow("SELECT count(*) as amount from plugin_ratingscomments_ratings where type = ? ratingTargetId = ? and userId = ?", array($type, $ratingTarget->getId(), $user->getO_Id()));
            if ($data['amount'] > 0) {
                return true;
            } else return false;
        }
        catch (Exception $e) {
            return false;
        }
    }


    /**
     * Get the data for the object from database for the given id
     *
     * @param integer $id
     * @return void
     */
    public function getById($id)
    {
        try {
            $data = $this->db->fetchRow("SELECT * FROM plugin_ratingscomments_ratings WHERE id = ?", $id);
            $this->assignVariablesToModel($data);
        }
        catch (Exception $e) {
        }
    }


    /**
     * Get the data for the object from database for the given name
     *
     * @param string $name
     */
    public function save()
    {
        if ($this->model->getId()) {
            return $this->model->update();
        }
        return $this->create();
    }

    /**
     * Create a new record for the object in database
     *
     * @return boolean
     */
    public function create()
    {
        try {

            $this->db->insert("plugin_ratingscomments_ratings", array(
                                                            "targetId" => $this->model->getTargetId(),
                                                            "comment" => $this->model->getComment(),
                                                            "date" => $this->model->getDate(),
                                                            "type" => $this->model->getType(),
                                                            "classname" => $this->model->getClassname(),
                                                            "rating" => $this->model->getRating(),
                                                            "metadata" => $this->model->getMetadata(),
                                                            "title" => $this->model->getTitle(),
                                                            "name" => $this->model->getName()
                                                       ));

            $this->model->setId($this->db->lastInsertId());

            return $this->save();

        }
        catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * Save changes to database, it's an good idea to use save() instead
     *
     * @return void
     */

    public function update()
    {
        try {
            $data["id"] = $this->model->getId();
            $data["targetId"] = $this->model->gettargetId();
            $data["date"] = $this->model->getDate();
            $data["type"] = $this->model->getType();
            $data["classname"] = $this->model->getClassname();
            $data["rating"] = $this->model->getRating();
            $data["metadata"] = $this->model->getMetadata();
            $data["comment"] = $this->model->getComment();


            $this->db->update("plugin_ratingscomments_ratings", $data, "id='" . $this->model->getId() . "'");

        }
        catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Deletes object from database
     *
     * @return void
     */

    public function delete()
    {
        try {
            $this->db->delete("plugin_ratingscomments_ratings", "id='" . $this->model->getId() . "'");

        }
        catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Deletes all comments for the current target
     *
     * @return void
     */

    public function deleteAllForTarget()
    {
        if ($this->model != null) {
            $targetId = $this->model->getTargetId();
            if (!empty($targetId)) {
                try {
                    $this->db->delete("plugin_ratingscomments_ratings", "targetId='" . $targetId . "'");
                }
                catch (Exception $e) {
                    logger::log(get_class($this) . ": Could not delete ratings for target id [" . $targetId . "]");
                    throw $e;
                }

            }
        }

    }

}


?>
