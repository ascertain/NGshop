<?php

class OnlineShop_Framework_Impl_SessionCart extends OnlineShop_Framework_AbstractCart implements OnlineShop_Framework_ICart {

    const SESSION_CART_NAMESPACE = "onlineshop_sessioncarts";

    /**
     * @return string
     */
    protected function getCartItemClassName() {
        return "OnlineShop_Framework_Impl_SessionCartItem";
    }

    /**
     * @return string
     */
    protected function getCartCheckoutDataClassName() {
        return "OnlineShop_Framework_Impl_SessionCartCheckoutData";
    }

    protected static function getSession() {
        $session = new Zend_Session_Namespace(self::SESSION_CART_NAMESPACE);
        if(empty($session->carts)) {
            $session->carts = array();
        }

        return $session;
    }


    public function save() {
        $session = self::getSession();

        if(!$this->getId()) {
            $this->setId(uniqid("sesscart_"));
        }

        $session->carts[$this->getId()] = serialize($this);
    }

    /**
     * @return void
     */
    public function delete() {

        $session = self::getSession();

        if(!$this->getId()) {
            throw new Exception("Cart saved not yes.");
        }

        $this->clear();
        unset($session->carts[$this->getId()]);

    }

    /**
     * @param callable $value_compare_func
     *
     * @return $this
     */
    public function sortItems(callable $value_compare_func)
    {
        uasort($this->items, $value_compare_func);

        return $this;
    }



    protected static $unserializedCarts = null;

    /**
     * @param int $id
     * @return OnlineShop_Framework_Impl_Cart
     */
    public static function getById($id) {
        $carts = self::getAllCartsForUser(-1);
        return $carts[$id];
    }

    /**
     * @static
     * @param int $userId
     * @return array
     */
    public static function getAllCartsForUser($userId) {
        if(self::$unserializedCarts == null) {
            foreach(self::getSession()->carts as $serializedCart) {
                $cart = unserialize($serializedCart);
                self::$unserializedCarts[$cart->getId()] = $cart;
            }
        }
        return self::$unserializedCarts;
    }

/*
    public function setValues($data = array()) {
        if ($data instanceof stdClass && count($data) > 0) {
            foreach ($data as $key => $value) {
                $this->setValue($key,$value);
            }
        }
    }*/



    /**
     * @return array
     */
    public function __sleep() {
        $vars = parent::__sleep();

        $blockedVars = array("creationDate","modificationDate","priceCalcuator");

        $finalVars = array();
        foreach ($vars as $key) {
            if (!in_array($key, $blockedVars)) {
                $finalVars[] = $key;
            }
        }

        return $finalVars;
    }


    /**
     * modified flag needs to be set
     */
    public function __wakeup() {
        $this->setIgnoreReadonly();
        $this->modified();
        $this->unsetIgnoreReadonly();
    }
}
