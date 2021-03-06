<?php

class OnlineShop_Framework_FilterService_SelectRelation extends OnlineShop_Framework_FilterService_AbstractFilterType {

    public function getFilterFrontend(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter) {
        $field = $this->getField($filterDefinition);


        $values = $productList->getGroupByRelationValues($field, true);

        $objects = array();
        Logger::log("Load Objects...", Zend_Log::INFO);

        $availableRelations = array();
        if($filterDefinition->getAvailableRelations()) {
            $availableRelations = $this->loadAllAvailableRelations($filterDefinition->getAvailableRelations());
        }

        foreach($values as $v) {
            if(empty($availableRelations) || $availableRelations[$v['value']] === true) {
                $objects[$v['value']] = \Pimcore\Model\Object\AbstractObject::getById($v['value']);
            }
        }
        Logger::log("done.", Zend_Log::INFO);

        if ($filterDefinition->getScriptPath()) {
            $script = $filterDefinition->getScriptPath();
        } else {
            $script = $this->script;
        }
        return $this->view->partial($script, array(
            "hideFilter" => $filterDefinition->getRequiredFilterField() && empty($currentFilter[$filterDefinition->getRequiredFilterField()]),
            "label" => $filterDefinition->getLabel(),
            "currentValue" => $currentFilter[$field],
            "values" => $values,
            "objects" => $objects,
            "fieldname" => $field,
            "metaData" => $filterDefinition->getMetaData()
        ));
    }

    protected function loadAllAvailableRelations($availableRelations, $availableRelationsArray = array()) {
        foreach($availableRelations as $rel) {
            if($rel instanceof \Pimcore\Model\Object\Folder) {
                $availableRelationsArray = $this->loadAllAvailableRelations($rel->getChilds(), $availableRelationsArray);
            } else {
                $availableRelationsArray[$rel->getId()] = true;
            }
        }
        return $availableRelationsArray;
    }


    public function addCondition(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter, $params, $isPrecondition = false) {
        $field = $this->getField($filterDefinition);
        $preSelect = $this->getPreSelect($filterDefinition);


        $value = $params[$field];

        if(empty($value) && !$params['is_reload']) {
            $o = $preSelect;
            if(!empty($o)) {
                if(is_object($o)) {
                    $value = $o->getId();
                } else {
                    $value = $o;
                }

            }
        } else if($value == OnlineShop_Framework_FilterService_AbstractFilterType::EMPTY_STRING) {
            $value = null;
        }

        $currentFilter[$field] = $value;


        if(!empty($value)) {
//            if($isPrecondition) {
//                $productList->addRelationCondition("PRECONDITION_" . $filterDefinition->getField(),  "dest = " . $productList->quote($value));
//            } else {
                $productList->addRelationCondition($field,  "dest = " . $productList->quote($value));
//            }

        }

        return $currentFilter;
    }
}
