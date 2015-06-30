<?php
class RatingsComments_AdminController extends Pimcore_Controller_Action_Admin
{

    public function getRatingAction()
    {

        $id = $this->_getParam("id");
        $type = $this->_getParam("type");
        if ($type == "object") {
            $target = Object_Abstract::getById($id);
        } else if ($type == "page" || $type == "snippet") {
            $target = Document::getById($id);
        } else {
            //try asset
            $target = Asset::getById($id);
        }

        $result = null;
        if ($target != null) {
            $ratingAmount = RatingsComments_Plugin::getRatingAmountForTarget($target);
            $ratingValue = RatingsComments_Plugin::getRatingValueForTarget($target);
            if ($ratingAmount > 0) {
                $result['success'] = true;
                $average = number_format($ratingValue / $ratingAmount, 2);
                $result['total'] = $ratingAmount;
                $result['average'] = $average;

            }

        }
        echo Zend_Json::encode($result);
        $this->removeViewRenderer();
    }

    public function commentsAction()
    {

        if ($this->_getParam('xaction') == "destroy") {
            $id = $this->_getParam("comments");
            $id = str_replace('"', '', $id);
            RatingsComments_Plugin::deleteComment($id);
            $results["success"] = true;
            $results["comments"] = "";
        } else {

            $id = $this->_getParam("objectid");
            $type = $this->_getParam("type");
            if ($type == "object") {
                $target = Object_Abstract::getById($id);
            } else if ($type == "page" || $type == "snippet") {
                $target = Document::getById($id);
            } else {
                //try asset
                $target = Asset::getById($id);
            }


            $comments = RatingsComments_Plugin::getComments($target);

            $results = array();
            if (is_array($comments)) {
                foreach ($comments as $comment) {

                    $shorttext = $comment->getComment();
                    if (strlen($shorttext) > 50) {
                        $shorttext = substr($shorttext, 0, 50) . "...";
                    }

                    $results["comments"][] = array("c_id" => $comment->getId(), "c_shorttext" => $shorttext, "c_text" => $comment->getComment(), "c_rating" => $comment->getRating(), "c_user" => $comment->getName(), "c_created" => $comment->getDate());
                }
            }

            if (!isset($results["comments"])) {
                $results["comments"] = "";
            }
        }

        echo Zend_Json::encode($results);
        $this->removeViewRenderer();
    }

    public function getAllCommentsAction() {
        if ($this->_getParam('xaction') == "destroy") {
            $id = $this->_getParam("comments");
            $id = str_replace('"', '', $id);
            RatingsComments_Plugin::deleteComment($id);
            $results["success"] = true;
            $results["comments"] = "";
        } else {
            $comments = RatingsComments_Plugin::getAllComments($this->_getParam("limit"), $this->_getParam("start"));

            if (is_array($comments)) {
                foreach ($comments as $comment) {
                    $shorttext = $comment->getComment();
                    if (strlen($shorttext) > 50) {
                        $shorttext = substr($shorttext, 0, 50) . "...";
                    }

                    $results["comments"][] = array("c_id" => $comment->getId(), "c_o_id" => $comment->getTargetId(), "c_shorttext" => $shorttext, "c_text" => $comment->getComment(), "c_rating" => $comment->getRating(), "c_user" => $comment->getName(), "c_created" => $comment->getDate());
                }
            }

            if (!isset($results["comments"])) {
                $results["comments"] = "";
            }
        }

        echo Zend_Json::encode($results);
        $this->removeViewRenderer();
    }
}