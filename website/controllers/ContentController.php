<?php

class ContentController extends Website_Controller_Action {
	
	public function portalAction () {
        $this->enableLayout();
	}

    public function defaultAction () {
        $this->forward("detail","shop",null,array('filterdefinition'=>$this->getParam("filterdefinition")));
	}

    public function landingPageAction() {
	
	
        $ajaxCall = $this->getRequest()->isXmlHttpRequest();
        $this->view->ajaxCall = $ajaxCall;
        if($ajaxCall === false) {
            $this->enableLayout();
        }
    }

    public function redirectAction() {
        $this->redirect('/en');
    }


    public function tenantSwitchesAction() {

        $this->enableLayout();

        $environment = OnlineShop_Framework_Factory::getInstance()->getEnvironment();

        if($this->getParam("change-checkout-tenant")) {
            $checkoutTenant = $this->getParam("change-checkout-tenant");
            $checkoutTenant = $checkoutTenant == "default" ? "" : $checkoutTenant;
            $environment->setCurrentCheckoutTenant(strip_tags($checkoutTenant));
            $environment->save();
        }

        if($this->getParam("change-assortment-tenant")) {
            $assortmentTenant = $this->getParam("change-assortment-tenant");
            $assortmentTenant = $assortmentTenant == "default" ? "" : $assortmentTenant;
            $environment->setCurrentAssortmentTenant(strip_tags($assortmentTenant));
            $environment->save();
        }

        $this->view->checkoutTenants = array("default", "noShipping", "expensiveShipping", "paypal", "datatrans", "otherFolder");
        $this->view->currentCheckoutTenant = $environment->getCurrentCheckoutTenant() ? $environment->getCurrentCheckoutTenant() : "default";

        $this->view->assortmentTenants = array("default", "OptimizedMysql");
        $this->view->currentAssortmentTenant = $environment->getCurrentAssortmentTenant() ? $environment->getCurrentAssortmentTenant() : "default";


    }
}
