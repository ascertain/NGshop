<?php
$realPath = realpath(dirname(__FILE__) . "/../../../pimcore/cli/");
require_once $realPath . "/startup.php";

ini_set('max_execution_time',0);
ini_set("memory_limit", "-1");

$shutdownArgs = array("file" => __FILE__, "argv" => $argv, "nicename" => "TrustedShop");
function shutdownHandler($arguments) {
    if (\Pimcore\Tool::classExists("FatalShutdown_Plugin")) {
        FatalShutdown_Plugin::shutdownHandler($arguments);
    }
}

register_shutdown_function("shutdownHandler", $shutdownArgs);


if (\Pimcore\Tool::classExists("FatalShutdown_Plugin")) {
    FatalShutdown_Plugin::startup($shutdownArgs);
}
Pimcore\Tool\Console::checkExecutingUser();

$importer = new TrustedShop\Importer();
$importer->setLogToConsole(true);
$importer->importAll();


if (\Pimcore\Tool::classExists("FatalShutdown_Plugin")) {
    FatalShutdown_Plugin::reportDone($shutdownArgs);
}


echo "done \n";



