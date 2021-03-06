<?php

class OnlineShop_Framework_FilterService_NumberRange extends OnlineShop_Framework_FilterService_AbstractFilterType {

    public function getFilterFrontend(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter) {
        if ($filterDefinition->getScriptPath()) {
            $script = $filterDefinition->getScriptPath();
        } else {
            $script = $this->script;
        }
        return $this->view->partial($script, array(
                                                  "hideFilter" => $filterDefinition->getRequiredFilterField() && empty($currentFilter[$filterDefinition->getRequiredFilterField()]),
                                                  "label" => $filterDefinition->getLabel(),
                                                  "currentValue" => $currentFilter[$this->getField($filterDefinition)],
                                                  "values" => $productList->getGroupByValues($this->getField($filterDefinition), true),
                                                  "definition" => $filterDefinition,
                                                  "fieldname" => $this->getField($filterDefinition),
                                                  "metaData" => $filterDefinition->getMetaData()
                                             ));
    }

    public function addCondition(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter, $params, $isPrecondition = false) {
        $field = $this->getField($filterDefinition);
        $value = $params[$field];

        if(empty($value)) {
            $value['from'] = $filterDefinition->getPreSelectFrom();
            $value['to'] = $filterDefinition->getPreSelectTo();
        }

        $currentFilter[$field] = $value;

        if(!empty($value)) {
            if(!empty($value['from'])) {

                if($isPrecondition) {
                    $productList->addCondition($this->getField($filterDefinition) . " >= " . $productList->quote($value['from']), "PRECONDITION_" . $this->getField($filterDefinition));
                } else {
                    $productList->addCondition($this->getField($filterDefinition) . " >= " . $productList->quote($value['from']), $this->getField($filterDefinition));
                }

            }
            if(!empty($value['to'])) {

                if($isPrecondition) {
                    $productList->addCondition($this->getField($filterDefinition) . " <= " . $productList->quote($value['to']), "PRECONDITION_" . $this->getField($filterDefinition));
                } else {
                    $productList->addCondition($this->getField($filterDefinition) . " <= " . $productList->quote($value['to']), $this->getField($filterDefinition));
                }

            }
        }
        return $currentFilter;
    }
}
