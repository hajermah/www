<?php

require('controller/ListController.php');
require('controller/HomeController.php');
//require('controller/DetaiFilm.php');
require('controller/searchController.php');
//require('model/services/BddAcces.php');

$page = filter_input(INPUT_GET,"page");

$route= array(
"home"=> HomeController::class,
"list"=> ListController::class,
"newAd"=> NewAdController::class,
"search"=> searchController::class,
"detail"=> DetailFilm::class,

);


foreach ($route as $routeValue => $className){
    
    if ($page === $routeValue){

        $controller = new $className;
        $controller->manage();
        break;
    }
}


if(!isset($controller)){
    $controller = new HomeController();
    $controller->manage();
}

