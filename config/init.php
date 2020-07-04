<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/core');
define("CONF", ROOT . '/config');
define("LAYOUT", 'layout');

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = trim($app_path, '/');
define("PATH", $app_path);

require_once ROOT . '/vendor/autoload.php';