<?php

class OnlineShop_Framework_Impl_CartItem_Resource extends \Pimcore\Model\Resource\AbstractResource {

    const TABLE_NAME = "plugin_onlineshop_cartitem";

    /**
     * Contains all valid columns in the database table
     *
     * @var array
     */
    protected $validColumns = array();

    /**
     * @var array
     */
    protected $fieldsToSave = array("cartId", "productId", "count", "itemKey", "parentItemKey", "comment", "addedDateTimestamp", "sortIndex");

    /**
     * Get the valid columns from the database
     *
     * @return void
     */
    public function init() {
        $this->validColumns = $this->getValidTableColumns(self::TABLE_NAME);
    }

    /**
     * @param int $productId
     * @param int $cartId
     * @return void
     */
    public function getByCartIdItemKey($cartId, $itemKey, $parentKey = "") {
        $classRaw = $this->db->fetchRow("SELECT * FROM " . self::TABLE_NAME . " WHERE itemKey=" . $this->db->quote($itemKey). " AND cartId = " . $this->db->quote($cartId) . " AND parentItemKey = " . $this->db->quote($parentKey));
        if(empty($classRaw)) {
            throw new Exception("CartItem for cartId " . $cartId . " and itemKey " . $itemKey . " not found.");
        }
        $this->assignVariablesToModel($classRaw);
    }

    /**
     * Save object to database
     *
     * @return void
     */
    public function save() {
        return $this->update();
    }

    /**
     * @return void
     */
    public function update() {

        foreach ($this->fieldsToSave as $field) {
            if (in_array($field, $this->validColumns)) {
                $getter = "get" . ucfirst($field);
                $value = $this->model->$getter();

                if (is_array($value) || is_object($value)) {
                    $value = serialize($value);
                } else  if(is_bool($value)) {
                    $value = (int)$value;
                }
                $data[$field] = $value;
            }
        }

        try {
            $this->db->insert(self::TABLE_NAME, $data);
        } catch(Exception $e) {
            $this->db->update(self::TABLE_NAME, $data,  "itemKey=" . $this->db->quote($this->model->getItemKey()). " AND cartId = " . $this->db->quote($this->model->getCartId()) . " AND parentItemKey = " . $this->db->quote($this->model->getParentItemKey()));
        }
    }

    /**
     * Deletes object from database
     *
     * @return void
     */
    public function delete() {
        $this->db->delete(self::TABLE_NAME, "itemKey=" . $this->db->quote($this->model->getItemKey()) . " AND cartId = " . $this->db->quote($this->model->getCartId()) . " AND parentItemKey = " . $this->db->quote($this->model->getParentItemKey()));
    }

    public function removeAllFromCart($cartId) {
        $this->db->delete(self::TABLE_NAME, "cartId = " . $this->db->quote($cartId));
    }

}
