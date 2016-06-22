<?php

require_once 'config.php';
require_once 'controller.php';

$route = isset($_GET['r']) ? $_GET['r'] : 'index';
$route = explode("/", $route);

if (count($route) === 1) {
    $cRoute = 'controller';
    $aRoute = str_replace('-', '', $route[0]);
} else {
    $cRoute = $route[0];
    $aRoute = str_replace('-', '', $route[1]);
}



$controller = new $cRoute();
$result = $controller->run($aRoute);

echo $result;
exit(0);
