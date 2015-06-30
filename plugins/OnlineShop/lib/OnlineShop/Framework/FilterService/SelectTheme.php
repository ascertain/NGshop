<?php

class OnlineShop_Framework_FilterService_SelectTheme extends OnlineShop_Framework_FilterService_AbstractFilterType {

    public function getFilterFrontend(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter) {
        if ($filterDefinition->getScriptPath()) {
            $script = $filterDefinition->getScriptPath();
        } else {
            $script = $this->script;
        }

        $rawValues = $productList->getGroupByValues($filterDefinition->getField(), true);
        $values = array();

    


        foreach($rawValues as $v) {
            $explode = explode(",", $v['value']);
            foreach($explode as $e) {
                if(!empty($e)) {
                    if($values[$e]) {
                        $count = $values[$e]['count'] + $v['count'];
                    } else {
                        $count = $v['count'];
                    }
                    $values[$e] = array('value' => $e, "count" => $count);
                }
            }
        }
		

        return $this->view->partial($script, array(
            "hideFilter" => $filterDefinition->getRequiredFilterField() && empty($currentFilter[$filterDefinition->getRequiredFilterField()]),
            "label" => $filterDefinition->getLabel(),
            "currentValue" => $currentFilter[$filterDefinition->getField()],
            "values" => array_values($values),
            "fieldname" => $filterDefinition->getField(),
            "metaData" => $filterDefinition->getMetaData()
        ));
    }

    public function addCondition(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter, $params, $isPrecondition = false) {

        $value = $params[$filterDefinition->getField()];

        if($value == OnlineShop_Framework_FilterService_AbstractFilterType::EMPTY_STRING) {
            $value = null;
        } else if(empty($value) && !$params['is_reload']) {
            $value = $filterDefinition->getPreSelect();
            if(is_object($value)) {
                $value = $value->getId();
            }
        }

        $currentFilter[$filterDefinition->getField()] = $value;

        if(!empty($value)) {

            $value = "%," . trim($value) . ",%";

            if($isPrecondition) {
                $productList->addCondition($filterDefinition->getField() . " LIKE " . $productList->quote($value), "PRECONDITION_" . $filterDefinition->getField());
            } else {
                $productList->addCondition($filterDefinition->getField() . " LIKE " . $productList->quote($value), $filterDefinition->getField());
            }

        }
        return $currentFilter;
    }
}
