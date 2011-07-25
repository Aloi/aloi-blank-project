<?php
require(__DIR__ . '/../app/autoload.php');

// Log4PHP - Disable in production for speed
$logging = true;
if($logging) {
	define('LOG4PHP_CONFIGURATION', '../app/conf/log4php.properties');
	require_once('log4php/LoggerManager.php');
	Aloi_Util_Logger_Manager::setLoggerManagerClass('LoggerManager');
}

// Handle the request
Aloi_Serphlet_Host::addConfigurationFile('../app/conf/web.xml');
Aloi_Serphlet_Host::setCacheDirectory('../app/cache');
Aloi_Serphlet_Host::process(dirname(__FILE__));