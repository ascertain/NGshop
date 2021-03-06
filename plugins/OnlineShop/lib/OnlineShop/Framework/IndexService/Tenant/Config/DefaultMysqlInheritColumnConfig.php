<?php

/**
 * Class OnlineShop_Framework_IndexService_Tenant_Config_DefaultMysqlInheritColumnConfig
 *
 * Sample implementation based on the OnlineShop_Framework_IndexService_Tenant_Config_DefaultMysql
 * that inherits attribute configuration of the default tenant.
 */
class OnlineShop_Framework_IndexService_Tenant_Config_DefaultMysqlInheritColumnConfig extends OnlineShop_Framework_IndexService_Tenant_Config_DefaultMysql {

    public function __construct($tenantConfigXml, $totalConfigXml = null) {
        $this->attributeConfig = $totalConfigXml->columns;

        $this->searchAttributeConfig = array();
        if($totalConfigXml->generalSearchColumns->column) {
            foreach($totalConfigXml->generalSearchColumns->column as $c) {
                $this->searchAttributeConfig[] = $c->name;
            }
        }
    }

    public function getTablename() {
        return "plugin_onlineshop_productindex3";
    }

    public function getRelationTablename() {
        return "plugin_onlineshop_productindex_relations3";
    }
}