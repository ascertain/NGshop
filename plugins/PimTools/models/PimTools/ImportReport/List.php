<?php

class PimTools_ImportReport_List extends Pimcore_Model_List_Abstract {

    /**
     * @var array
     */
    public $objects;

    protected $validOrderKeys = array("id", "productId", "importDate", "action", "state", "type", "processedDate", "userId");

    /**
     * @var array
     */
    public function isValidOrderKey($key) {
        if(in_array($key, $this->validOrderKeys)) {
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    function getObjects() {
        if(empty($this->objects)) {
            $this->load();
        }
        return $this->objects;
    }

    /**
     * @param array $objects
     * @return void
     */
    function setObjects($objects) {
        $this->objects = $objects;
    }


    /**
     *
     * Methods for Zend_Paginator_Adapter_Interface
     */

    public function count() {
        return parent::getTotalCount();
    }

    public function getItems($offset, $itemCountPerPage) {
        parent::setOffset($offset);
        parent::setLimit($itemCountPerPage);
        return parent::load();
    }

    public function getPaginatorAdapter() {
        return $this;
    }

    /**
     * Methods for Iterator
     */

    public function rewind() {
        $this->getObjects();
        reset($this->objects);
    }

    public function current() {
        $this->getObjects();
        $var = current($this->objects);
        return $var;
    }

    public function key() {
        $this->getObjects();
        $var = key($this->objects);
        return $var;
    }

    public function next() {
        $this->getObjects();
        $var = next($this->objects);
        return $var;
    }

    public function valid() {
        $this->getObjects();
        $var = $this->current() !== false;
        return $var;
    }


}
