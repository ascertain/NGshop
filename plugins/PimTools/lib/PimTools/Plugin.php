<?php 

class PimTools_Plugin extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface {

    /**
     * @return string $jsClassName
     */
    public static function getJsClassName(){
        return "pimcore.plugin.pimtools";
    }

    /**
     * absolute path to the folder holding plugin translation files
     * @static
     * @return string
     */
    public static function getTranslationFileDirectory() {
        return PIMCORE_PLUGINS_PATH."/PimTools/texts";
    }

    /**
    *
    * @param string $language
    * @return string path to the translation file relative to plugin direcory
    */
	public static function getTranslationFile($language){
        if($language == "de"){
            return "/PimTools/texts/de.csv";
        } else if($language == "en"){
            return "/PimTools/texts/en.csv";
        } else {
            return null;
        }
    }

    /**
     * @return string $statusMessage
     */
    public static function install() {
        $db = Pimcore_Resource::get();

        $db->query("CREATE TABLE `" . PimTools_ImportReport_Resource::TABLE_NAME . "` (
               id INT(20) AUTO_INCREMENT NOT NULL,
               productId INT(20) NOT NULL,
               importDate INT NOT NULL,
               action VARCHAR(20) NOT NULL,
               type VARCHAR(20) NULL DEFAULT NULL,
               state TINYINT(1),
               processedDate INT,
               userId INT(20),
              PRIMARY KEY (id)
            ) ENGINE = InnoDB ROW_FORMAT = DEFAULT;
        ");

    }

    /**
     * @return boolean $isInstalled
     */
    public static function isInstalled() {

        // Test updater
//        $updater = new PimTools_Updater(3);
//        $updater->runUpdates();

		$result = null;
		try{
			$result = Pimcore_API_Plugin_Abstract::getDb()->describeTable(PimTools_ImportReport_Resource::TABLE_NAME);
		} catch(Zend_Db_Exception $e){}
		return !empty($result);
    }

    /**
     * @return boolean $needsReloadAfterInstall
     */
    public static function needsReloadAfterInstall() {
        return true;
    }

    /**
     * @return boolean $readyForInstall
     */
    public static function readyForInstall() {
        return !self::isInstalled();
    }

    /**
     * @return string $statusMessage
     */
    public static function uninstall() {
        $db = Pimcore_Resource::get();
        $db->query("DROP TABLE IF EXISTS `" . PimTools_ImportReport_Resource::TABLE_NAME . "`;");
    }

}


