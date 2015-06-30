<?php

class RatingsComments_List_Resource extends Pimcore_Model_List_Resource_Abstract {

    /**
     * Loads a list of objects for the specicifies parameters, returns an array of Object_Abstract elements
     *
     * @return array
     */
    public function load () {

        $comments = array();;
        $commentsData = $this->db->fetchAll("SELECT id FROM plugin_ratingscomments_ratings".$this->getCondition().$this->getOrder().$this->getOffsetLimit());

        foreach ($commentsData as $commentData) {

            // return all comments as Type Commenting
            $comments[] = RatingsComments::getById($commentData["id"]);
        }

        $this->model->setComments($comments);
        return $comments;
    }

    public function getTotalCount () {
        $amount = $this->db->fetchRow("SELECT COUNT(*) as amount FROM plugin_ratingscomments_ratings".$this->getCondition());

        return $amount["amount"];
    }

    public function getCount () {
        if (count($this->model->getObjects()) > 0) {
            return count($this->model->getObjects());
        }

        $amount = $this->db->fetchAll("SELECT COUNT(*) as amount FROM plugin_ratingscomments_ratings".$this->getCondition().$this->getOrder().$this->getOffsetLimit());
        return $amount["amount"];
    }
}
