<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rtippler
 * Date: 09.08.12
 * Time: 15:12
 * To change this template use File | Settings | File Templates.
 */
class OnlineShop_Framework_FilterService_ProxyFilter extends OnlineShop_Framework_FilterService_AbstractFilterType
{
    /** @var $proxy OnlineShop_Framework_FilterService_AbstractFilterType*/
    private $proxy;
    protected  $field;


    function __construct($view, $script,$config)
    {
        parent::__construct($view,$script,$config);
        if (!$config->proxyclass){
            throw new Exception("wrong configuration for " .  __CLASS__ . ": config setting proxyclass is missing!");
        }
        if (!$config->field){
            throw new Exception("wrong configuration for " .  __CLASS__ . ": config setting field is missing!");
        }

        $this->proxy = new $config->proxyclass($view,$script,$config);
        $this->field= $config->field;
    }

    public function getFilterFrontend(
        OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition,
        OnlineShop_Framework_IProductList $productList, $currentFilter
    )
    {
        $filterDefinition->field=$this->field;
        return $this->proxy->getFilterFrontend($filterDefinition,$productList,$currentFilter);
    }

    public function addCondition(
        OnlineShop_Framework_AbstractFilterDefinitionType $filterDefinition,
        OnlineShop_Framework_IProductList $productList, $currentFilter, $params,
        $isPrecondition = false
    ) {
        $filterDefinition->field=$this->field;
        return $this->proxy->addCondition($filterDefinition,$productList,$currentFilter,$params,$isPrecondition);
    }



}
