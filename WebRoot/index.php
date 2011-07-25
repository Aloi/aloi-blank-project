<?php
// Include Aloi
require_once('../lib/aloi/Aloi.php');

// Register the autoloader and set include paths
Aloi::registerAutoload(array('../src', '../lib', '../lib/aloi'));

// Log4PHP - Disable in production for speed
$logging = true;
if($logging) {
	define('LOG4PHP_CONFIGURATION', 'WEB-INF/log4php.properties');
	require_once('log4php/LoggerManager.php');
	Aloi_Util_Logger_Manager::setLoggerManagerClass('LoggerManager');
}

// Handle the request
Aloi_Serphlet_Host::addConfigurationFile('../conf/web.xml');
Aloi_Serphlet_Host::setCacheDirectory('../conf/cache');
Aloi_Serphlet_Host::process(dirname(__FILE__));