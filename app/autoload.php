<?php
// Require the class loader
require(__DIR__ . '/../vendor/aloi/Aloi/ClassLoader.php');

// Register the prefixes to paths
$loader = new Aloi_ClassLoader();
$loader->registerPrefixes(array(
    'Aloi_Deployment' => __DIR__ . '/../vendor/deployment',
    'Aloi_Routes' => __DIR__ . '/../vendor/httpserver',
    'Aloi_Serphlet' => __DIR__ . '/../vendor/httpserver',
    'Aloi_Phigester' => __DIR__ . '/../vendor/phigester',
    'Aloi_Phruts_Compat' => __DIR__ . '/../vendor/phpmvc-compat',
    'Aloi_Phruts' => __DIR__ . '/../vendor/phruts',
    'Aloi_' => __DIR__ . '/../vendor/aloi',
));
$loader->registerFallbackIncludePaths(array(
    '../src',
    '../vendor'
));

$loader->register();