<?php

namespace TrustedShop;
use Pimcore\API\Plugin as PluginLib;
use Pimcore\Model\Object\Fieldcollection\Data\TrustedShopCriteria;


class Plugin extends PluginLib\AbstractPlugin implements PluginLib\PluginInterface {

    /**
     * @var array
     */
    protected static $pluginConfig;

    const PLUGIN_NAME = 'trusted-shop';
    public static function getConfigPath(){
        $dir = PIMCORE_WEBSITE_VAR.'/plugins/' . self::PLUGIN_NAME;
        if(!is_dir($dir)){
            mkdir($dir,0755,true);
        }
        return $dir;
    }

    public static function getConfigFile(){
        return self::getConfigPath().'/config.xml';
    }

    public static function getConfig(){
        if(!self::$pluginConfig){
            $xml = new \Zend_Config_Xml(self::getConfigFile());
            self::$pluginConfig = $xml->toArray();
        }
        return self::$pluginConfig;
    }


	public static function install (){
        $updater = new Updater('Install');
        $updater->run();
        return true;
	}
	
	public static function uninstall (){
        // implement your own logic here
        return true;
	}

	public static function isInstalled () {
        if(is_readable(self::getConfigFile())){
            return true;
        }
	}
}
