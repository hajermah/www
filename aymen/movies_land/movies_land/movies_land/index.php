<?php

require('src/controller/homeController.php');
require('src/controller/admovieController.php');
require('src/controller/adsmovieController.php');
require('src/controller/NewAdController.php');
require('src/model/model.php');
require('src/service/BddAcces.php');
require('src/controller/searchController.php');

$page = filter_input(INPUT_GET, "page");

$route = array(
    "home"  => homeController::class,
    "ads"   => adsmovieController::class,
    "ad"    => admovieController::class,
    "search"=> SearchController::class,
    "newAd" => NewAdController::class
);

foreach ($route as $routeValue => $className) {

    if ($page === $routeValue) {

        $controller = new $className;
        $controller->manage();
        break;
    }
}

if(!isset($controller)) {

    $controller = new homeController();
    $controller->manage();
}


