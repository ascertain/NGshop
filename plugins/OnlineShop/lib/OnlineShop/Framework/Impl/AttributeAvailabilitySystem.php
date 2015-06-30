<?php

/**
 * Class OnlineShop_Framework_Impl_AttributeAvailabilitySystem
 */
class OnlineShop_Framework_Impl_AttributeAvailabilitySystem implements OnlineShop_Framework_IAvailabilitySystem {
    /**
     * @param OnlineShop_Framework_ProductInterfaces_ICheckoutable $abstractProduct
     * @param int $quantityScale
     * @param null $products
     * @return OnlineShop_Framework_IAvailability
     */
    public function getAvailabilityInfo(OnlineShop_Framework_ProductInterfaces_ICheckoutable $abstractProduct, $quantityScale = 1, $products = null) {
        return $abstractProduct;
    }



}

