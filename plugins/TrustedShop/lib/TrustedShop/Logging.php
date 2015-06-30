<?php
/**
 * Created by PhpStorm.
 * User: jaichhorn
 * Date: 16.01.14
 * Time: 11:42
 */
namespace TrustedShop;


class Logging {

    private static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            if (\Pimcore\Tool::classExists("\\Elements\\Logging\\Log")) {
                $logger = new \Elements\Logging\Log();
                $logger->addWriter(new \Elements\Logging\Writer\LogWriterDb(\Zend_Log::DEBUG));
                $logger->addWriter(new \Zend_Log_Writer_Stream(PIMCORE_WEBSITE_PATH . "/var/log/trustedshop.log"));
                $systemConfig = \Pimcore\Config::getSystemConfig();

                $debugAddresses = explode(',', $systemConfig->email->debug->emailaddresses);
                $logger->addWriter(new \Elements\Logging\Writer\LogWriterMail($debugAddresses, "TrustedShop-Importer", "", \Zend_Log::ERR));

                self::$instance = $logger;
            }
        }

        return self::$instance;
    }
} 