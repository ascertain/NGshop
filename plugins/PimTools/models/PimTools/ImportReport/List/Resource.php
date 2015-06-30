<?php

class PimTools_ImportReport_List_Resource extends Pimcore_Model_List_Resource_Abstract {

    /**
     * @return array
     */
    public function load() {
        $objects = array();

        $objectIds = $this->db->fetchCol("SELECT id FROM " . PimTools_ImportReport_Resource::TABLE_NAME .
                                                 $this->getCondition() . $this->getOrder() . $this->getOffsetLimit());

        foreach ($objectIds as $id) {
            $objects[] = PimTools_ImportReport::getById($id);
        }

        $this->model->setObjects($objects);

        return $objects;
    }

    public function getTotalCount() {
        $amount = $this->db->fetchRow("SELECT COUNT(*) as amount FROM `" . PimTools_ImportReport_Resource::TABLE_NAME . "`" . $this->getCondition());
        return $amount["amount"];
    }

}
