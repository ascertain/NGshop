<?php

class OnlineShop_Framework_FilterService_AgeFilter extends OnlineShop_Framework_FilterService_AbstractFilterType {

    public function getFilterFrontend(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter) {
      
	  if ($filterDefinition->getScriptPath()) {
            $script = $filterDefinition->getScriptPath();
        } else {
            $script = $this->script;
        }

        $ranges = $filterDefinition->getRanges();
$agefields=array('upperlimit'=>$filterDefinition->getField(),'lowerlimit'=>$filterDefinition->getSecondfield());
        $groupByValues = $productList->getGroupByValues($agefields, true);

$counts = array();
        
		foreach($ranges->getData() as $row) {
            $counts[$row['from'] . "_" . $row['to']] = 0;
        }

		
		 foreach($groupByValues as $groupByValue) {
            
                foreach($ranges->getData() as $row) {
                    if( (($row['from'] <= $groupByValue['lowerlimit']) && ($row['to'] >= $groupByValue['lowerlimit'])) || 
					    
						(($row['from'] <= $groupByValue['upperlimit']) && ($row['to'] >= $groupByValue['upperlimit'])) ||
						
						(($row['from'] >= $groupByValue['lowerlimit']) && ($row['to'] <= $groupByValue['upperlimit']))
					){
                        $counts[$row['from'] . "_" . $row['to']] += $groupByValue['count'];
                        
                    }
                }
            
        }
		
		
		
		 $values = array();
        foreach($ranges->getData() as $row) {
            if($counts[$row['from'] . "_" . $row['to']]) {
                $values[] = array("from" => $row['from'], "to" => $row['to'], "label" => $this->createLabel($row), "count" => $counts[$row['from'] . "_" . $row['to']], "unit" => $filterDefinition->getUnit());
            }
        }

        $currentValue = "";
        if($currentFilter[$filterDefinition->getField()]['from'] || $currentFilter[$filterDefinition->getField()]['to']) {
            $currentValue = implode($currentFilter[$filterDefinition->getField()], "-");
        }


        return $this->view->partial($script, array(
            "hideFilter" => $filterDefinition->getRequiredFilterField() && empty($currentFilter[$filterDefinition->getRequiredFilterField()]),
            "label" => $filterDefinition->getLabel(),
            "currentValue" => $currentValue,
            "currentNiceValue" => $this->createLabel($currentFilter[$filterDefinition->getField()]),
            "unit" => $filterDefinition->getUnit(),
            "values" => $values,
            "definition" => $filterDefinition,
            "fieldname" => $filterDefinition->getField(),
			"secondfieldname"=>$filterDefinition->getSecondfield()
        ));
		
       
       
        

        
      
        
    }

    public function addCondition(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter, $params, $isPrecondition = false) {
        
 $rawValue = $params[$filterDefinition->getField()];


        if(!empty($rawValue) && $rawValue != OnlineShop_Framework_FilterService_AbstractFilterType::EMPTY_STRING) {
            $values = explode("-", $rawValue);
            $value['from'] = trim($values[0]);
            $value['to'] = trim($values[1]);
        } else if($rawValue == OnlineShop_Framework_FilterService_AbstractFilterType::EMPTY_STRING) {
            $value = null;
        } else {
            $value['from'] = $filterDefinition->getPreSelectFrom();
            $value['to'] = $filterDefinition->getPreSelectTo();
        }
		
        $currentFilter[$filterDefinition->getField()] = $value;


        if(!empty($value)) {
            if(!empty($value['from'])) {

                if($isPrecondition) {
                    $productList->addCondition($filterDefinition->getSecondfield() . " >= " . $productList->quote($value['from']), "PRECONDITION_" . $filterDefinition->getField());
                } else {
                   $productList->addCondition("(".$filterDefinition->getSecondfield() . " >= " . $productList->quote($value['from'])." AND ".$filterDefinition->getSecondfield() . " <= " . $productList->quote($value['to']).")"
					
					." OR "."(".$filterDefinition->getField() . " >= " . $productList->quote($value['from'])." AND ".$filterDefinition->getField() . " <= " . $productList->quote($value['to']).")"
					
					
					." OR "."(".$filterDefinition->getSecondfield() . " <= " . $productList->quote($value['from'])." AND ".$filterDefinition->getField() . " >= " . $productList->quote($value['to']).")"
					
					
					
					, $filterDefinition->getField());
                }

            }
            
        }
        return $currentFilter;
        
      
    }
	
	
	
	private function createLabel($data) {
        if(is_array($data)) {
            if(!empty($data['from'])) {
                if(!empty($data['to'])) {
                    return $data['from'] . " - " . $data['to'];
                } else {
                    return $this->view->translate("more than") . " " . $data['from'];
                }
            } else if(!empty($data['to'])) {
                return $this->view->translate("less than") . " " . $data['to'];
            }
        } else {
            return "";
        }
    }

}
