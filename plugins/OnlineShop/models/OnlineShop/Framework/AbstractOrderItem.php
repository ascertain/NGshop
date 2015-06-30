<?php

/**
 * Abstract base class for order item pimcore objects
 */
class OnlineShop_Framework_AbstractOrderItem extends \Pimcore\Model\Object\Concrete {

    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return OnlineShop_Framework_ProductInterfaces_ICheckoutable
     */
    public function getProduct() {
        throw new OnlineShop_Framework_Exception_UnsupportedException("getProduct is not implemented for " . get_class($this));
    }

    /**
     * @param OnlineShop_Framework_ProductInterfaces_ICheckoutable $product
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     */
    public function setProduct($product) {
        throw new OnlineShop_Framework_Exception_UnsupportedException("setProduct is not implemented for " . get_class($this));
    }


    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return string
     */
    public function getProductNumber() {
        throw new OnlineShop_Framework_Exception_UnsupportedException("getProductNumber is not implemented for " . get_class($this));
    }

    /**
     * @param string $productNumber
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     */
    public function setProductNumber($productNumber) {
        throw new OnlineShop_Framework_Exception_UnsupportedException("setProductNumber is not implemented for " . get_class($this));
    }


    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return string
     */
    public function getProductName() {
        throw new OnlineShop_Framework_Exception_UnsupportedException("getProductName is not implemented for " . get_class($this));
    }

    /**
     * @param string $productName
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     */
    public function setProductName($productName) {
        throw new OnlineShop_Framework_Exception_UnsupportedException("setProductName is not implemented for " . get_class($this));
    }

    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return float
     */
    public function getAmount() {
        throw new OnlineShop_Framework_Exception_UnsupportedException("getAmount is not implemented for " . get_class($this));
    }

    /**
     * @param float $amount
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     */
    public function setAmount($amount) {
        throw new OnlineShop_Framework_Exception_UnsupportedException("setAmount is not implemented for " . get_class($this));
    }


    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return float
     */
    public function getTotalPrice() {
        throw new OnlineShop_Framework_Exception_UnsupportedException("getTotalPrice is not implemented for " . get_class($this));
    }

    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice) {
        throw new OnlineShop_Framework_Exception_UnsupportedException("setTotalPrice is not implemented for " . get_class($this));
    }


    /**
     * @return OnlineShop_Framework_AbstractOrderItem[]
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     */
    public function getSubItems() {
        throw new OnlineShop_Framework_Exception_UnsupportedException("getSubItems is not implemented for " . get_class($this));
    }

    /**
     * @param OnlineShop_Framework_AbstractOrderItem[] $subItems
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     */
    public function setSubItems($subItems) {
        throw new OnlineShop_Framework_Exception_UnsupportedException("setSubItems is not implemented for " . get_class($this));
    }

    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return \Pimcore\Model\Object\Fieldcollection
     */
    public function getPricingRules() {
        throw new OnlineShop_Framework_Exception_UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param \Pimcore\Model\Object\Fieldcollection $pricingRules
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return $this
     */
    public function setPricingRules ($pricingRules) {
        throw new OnlineShop_Framework_Exception_UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return string
     */
    public function getOrderState() {
        throw new OnlineShop_Framework_Exception_UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $orderState
     * @throws OnlineShop_Framework_Exception_UnsupportedException
     * @return $this
     */
    public function setOrderState ($orderState) {
        throw new OnlineShop_Framework_Exception_UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }


    /**
     * is the order item cancel able
     * @return bool
     */
    public function isCancelAble()
    {
        return true && !$this->isCanceled();
    }

    /**
     * is the order item edit able
     * @return bool
     */
    public function isEditAble()
    {
        return true && !$this->isCanceled();
    }


    /**
     * ist eine rückerstattung erlaubt
     * @return bool
     */
    public function isComplaintAble()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isCanceled()
    {
        return $this->getOrderState() == OnlineShop_Framework_AbstractOrder::ORDER_STATE_CANCELLED;
    }

    /**
     * @return OnlineShop_Framework_AbstractOrder
     */
    public function getOrder()
    {
        return $this->getParent();
    }
}
