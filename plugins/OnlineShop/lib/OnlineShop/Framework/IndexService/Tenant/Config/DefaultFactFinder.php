<?php

/**
 * Class OnlineShop_Framework_IndexService_Tenant_Config_DefaultFactFinder
 *
 * Default implementation for fact finder as product index backend
 */
class OnlineShop_Framework_IndexService_Tenant_Config_DefaultFactFinder
    extends OnlineShop_Framework_IndexService_Tenant_Config_AbstractConfig
    implements OnlineShop_Framework_IndexService_Tenant_IFactFinderConfig, OnlineShop_Framework_IndexService_Tenant_IMockupConfig
{
    protected $clientConfig;

    /**
     * @param string $tenantName
     * @param $tenantConfigXml
     * @param null $totalConfigXml
     */
    public function __construct($tenantName, $tenantConfigXml, $totalConfigXml = null)
    {
        parent::__construct($tenantName, $tenantConfigXml, $totalConfigXml);

        $this->clientConfig = $tenantConfigXml->clientConfig->toArray();
    }


    /**
     * @param string $property
     *
     * @return array|string
     */
    public function getClientConfig($property = null)
    {
        return $property
            ? $this->clientConfig[$property]
            : $this->clientConfig
        ;
    }


    /**
     * checks, if product should be in index for current tenant
     *
     * @param OnlineShop_Framework_ProductInterfaces_IIndexable $object
     *
     * @return bool
     */
    public function inIndex(OnlineShop_Framework_ProductInterfaces_IIndexable $object)
    {
        return true;
    }

    /**
     * in case of subtenants returns a data structure containing all sub tenants
     *
     * @param OnlineShop_Framework_ProductInterfaces_IIndexable $object
     * @param null                                              $subObjectId
     *
     * @return mixed $subTenantData
     */
    public function prepareSubTenantEntries(OnlineShop_Framework_ProductInterfaces_IIndexable $object, $subObjectId = null)
    {

    }

    /**
     * populates index for tenant relations based on gived data
     *
     * @param mixed $objectId
     * @param mixed $subTenantData
     * @param mixed $subObjectId
     *
     * @return void
     */
    public function updateSubTenantEntries($objectId, $subTenantData, $subObjectId = null)
    {

    }

    /**
     * creates and returns tenant worker suitable for this tenant configuration
     *
     * @return OnlineShop_Framework_IndexService_Tenant_IWorker
     */
    public function getTenantWorker()
    {
        if(empty($this->tenantWorker))
        {
            $this->tenantWorker = new OnlineShop_Framework_IndexService_Tenant_Worker_DefaultFactFinder($this);
        }

        return $this->tenantWorker;
    }

    /**
     * returns condition for current subtenant
     *
     * @return array
     */
    public function getSubTenantCondition()
    {
        return [];
    }


    /**
     * creates object mockup for given data
     *
     * @param $objectId
     * @param $data
     * @param $relations
     * @return mixed
     */
    public function createMockupObject($objectId, $data, $relations)
    {
        return new OnlineShop_Framework_ProductList_DefaultMockup($objectId, $data, $relations);
    }
}
