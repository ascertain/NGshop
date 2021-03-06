<?php

class OnlineShop_Framework_FilterService_FactFinder_MultiSelect extends OnlineShop_Framework_FilterService_MultiSelect
{
    /**
     * @param OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition
     * @param OnlineShop_Framework_IProductList                 $productList
     */
    public function prepareGroupByValues(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList)
    {

    }


    /**
     * @param OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition
     * @param OnlineShop_Framework_IProductList                 $productList
     * @param array                                             $currentFilter
     * @param array                                             $params
     * @param bool                                              $isPrecondition
     *
     * @return mixed
     */
    public function addCondition(OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition, OnlineShop_Framework_IProductList $productList, $currentFilter, $params, $isPrecondition = false)
    {
        // init
        $field = $this->getField($filterDefinition);
        $value = $params[$field];


        // set defaults
        if(empty($value) && !$params['is_reload'] && ($preSelect = $this->getPreSelect($filterDefinition)))
        {
            $value = explode(",", $preSelect);
        }
        else if(!empty($value) && in_array(OnlineShop_Framework_FilterService_AbstractFilterType::EMPTY_STRING, $value))
        {
            $value = null;
        }

        $currentFilter[$field] = $value;



        if(!empty($value))
        {
            $quotedValues = array();

            foreach($value as $v)
            {
                if(!empty($v))
                {
                    $quotedValues[] = $v;
                }
            }


            if(!empty($quotedValues))
            {
                if($filterDefinition->getUseAndCondition())
                {
                    foreach ($quotedValues as $value)
                    {
                        $productList->addCondition($value, $field);
                    }
                }
                else
                {
                    $productList->addCondition($quotedValues, $field);
                }
            }
        }

        return $currentFilter;
    }
}
