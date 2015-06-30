<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cfasching
 * Date: 10.01.12
 * Time: 10:28
 * To change this template use File | Settings | File Templates.
 */

class PimTools_AdminController extends Pimcore_Controller_Action_Admin {

    public function init() {
        parent::init();
    }

    public function showAction(){
        if($this->_getParam("xaction") == "update") {
            $data = json_decode($this->_getParam("p_results"));

            $report = PimTools_ImportReport::getById($data->id);
            if(!empty($report)) {
                $report->setState($data->state);
                $report->setUserId($this->getUser()->getId());
                $report->setProcessedDate(Zend_Date::now()->get());

                $report->save();

                $result = array("success" => true, "p_results" => $this->getDataEntry($report));
            } else {
                $result = array("success" => false);
            }
            $this->_helper->json($result);
        } else {

            $offset = $this->_getParam("start");
            $limit = $this->_getParam("limit");

            $queryString = "1=1";
            if($this->_getParam("fromDate")) {
                $date = new Zend_Date($this->_getParam("fromDate"));
                $queryString .= " AND importDate >= '" . $date->get() . "'";
            }
            if($this->_getParam("toDate")) {
                $date = new Zend_Date($this->_getParam("toDate"));
                $queryString .= " AND importDate <= '" . $date->get() . "'";
            }

            if($this->_getParam("importaction")) {
                $queryString .= " AND `action` =  " . Pimcore_Resource::get()->quote($this->_getParam("importaction"));
            }
            if($this->_getParam("importtype")) {
                $queryString .= " AND `type` =  " . Pimcore_Resource::get()->quote($this->_getParam("importtype"));
            }
            if($this->_getParam("productid")) {
                $queryString .= " AND `productid` =  " . Pimcore_Resource::get()->quote($this->_getParam("productid"));
            }
            if($this->_getParam("state")) {
                if($this->_getParam("state") == 'not_processed') {
                    $queryString .= " AND (`state` = 0 || ISNULL(`state`))";
                } else if($this->_getParam("state") == 'processed') {
                    $queryString .= " AND `state` = 1";
                }
            }

            $list = new PimTools_ImportReport_List();
            $list->setCondition($queryString);
            $list->setLimit($limit);
            $list->setOffset($offset);

            $list->setOrder("DESC");
            $list->setOrderKey("importDate");
            if($this->_getParam("sort") && $this->_getParam("dir")) {
                $list->setOrder($this->_getParam("dir"));
                $list->setOrderKey($this->_getParam("sort"));
            }

            $objects = $list->getObjects();
            $resultList = array();
            if(!empty($objects)) {
                foreach($objects as $r) {
                    $resultList[] = $this->getDataEntry($r);
                }
            }

            $results = array("p_totalCount" => $list->getTotalCount(), "p_results" => $resultList);
            $this->_helper->json($results);
        }

    }

    private function getDataEntry($report) {

        $importDate = new Zend_Date($report->getImportDate());
        $importDate = $importDate->get(Zend_Date::DATETIME_MEDIUM);
        $product = Object_Abstract::getById($report->getProductId());
        if(!empty($product)) {
            $product = $product->getFullPath();
        }

        $processedDate = "";
        if($report->getProcessedDate()) {
            $processedDate = new Zend_Date($report->getProcessedDate());
            $processedDate = $processedDate->get(Zend_Date::DATETIME_MEDIUM);
        }

        $user = User::getById($report->getUserId());
        if(!empty($user)) {
            $user = $user->getUsername();
        } else {
            $user = "";
        }

        $data =  array(
            'id' => $report->getId(),
            'importDate' => $importDate,
            'action' => $report->getAction(),
            'type' => $report->getType(),
            'productid' => $report->getProductId(),
            'productpath' => $product,
            'state' => $report->getState(),
            'processedDate' => $processedDate,
            'user' => $user
        );

        return $data;
    }

    public function actionsJsonAction() {

        $actions[] = array("key" => "-1", "value" => "");
        foreach(PimTools_ImportReport::getActions() as $action) {
            $actions[] = array("key" => $action, "value" => $action);
        }

        $this->_helper->json(array("actions" => $actions));
    }

    public function typesJsonAction() {

        $types[] = array("key" => "-1", "value" => "");
        foreach(PimTools_ImportReport::getTypes() as $type) {
            $types[] = array("key" => $type, "value" => $type);
        }

        $this->_helper->json(array("types" => $types));
    }

}