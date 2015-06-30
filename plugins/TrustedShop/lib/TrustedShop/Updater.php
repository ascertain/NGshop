<?php
/**
 * Created by PhpStorm.
 * User: ckogler
 * Date: 17.11.2014
 * Time: 11:35
 */

namespace TrustedShop;
use Pimcore\API\Plugin as PluginLib;
use Pimcore\Tool\XmlWriter;

class Updater extends PluginLib\AbstractPluginUpdater {

    public function updateRevisionInstall(){
        $configDir = Plugin::getConfigFile();
        $write = new XmlWriter();
        $write->setConfig(array('enableMaintenanceSync' => 'true'));
        $write->write($configDir);
    }
}