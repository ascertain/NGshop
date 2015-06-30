<?php
use PimTools_Plugin;

class PimTools_Updater{

    protected $_revision = null;



    public function __construct($revision = 0){
        $this->_revision = $revision;
    }

    public function runUpdates(){
        $db = Pimcore_Resource_Mysql::get()->getResource();
        $tableDescription = $db->describeTable(PimTools_ImportReport_Resource::TABLE_NAME);

        if(!$tableDescription['message']){
            $query = "ALTER TABLE " . PimTools_ImportReport_Resource::TABLE_NAME . " ADD message LONGTEXT";
            $db->query($query);
        }

        if(!$tableDescription['type']){
            $query = "ALTER TABLE " . PimTools_ImportReport_Resource::TABLE_NAME . " ADD type VARCHAR(20) NULL DEFAULT NULL";
            $db->query($query);
        }
    }
}