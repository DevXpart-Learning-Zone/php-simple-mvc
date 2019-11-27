<?php
// Get the URI
$url = $_SERVER['REQUEST_URI'];

// Explode the URI
$route = explode("/", $url);

// Reform coltroller name
$controllerName  =  ucfirst($route[3]) . 'Controller';

// Reform method name
$methodName  =  $route[4];

// Include my controller
include('./Controllers/' . $controllerName . '.php');

// Create object
$myObj = new $controllerName();


if ($methodName) {
    $myObj->$methodName();
}