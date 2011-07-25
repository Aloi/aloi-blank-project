// Include Aloi
require_once('../vendors/aloi/Aloi.php');

// Register the autoloader and set include paths
Aloi::registerAutoload(array('../src', '../vendors', '../vendors/aloi'));

// Log4PHP - Disable in production for speed
$logging = true;
if($logging) {
	define('LOG4PHP_CONFIGURATION', '../app/conf/log4php.properties');
	require_once('log4php/LoggerManager.php');
	Aloi_Util_Logger_Manager::setLoggerManagerClass('LoggerManager');
}
