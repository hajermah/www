<?php

require('controller/AllAdsController.php');

require('controller/HomeController.php');
require('controller/LoginController.php');
require('controller/NewAdController.php');

require('controller/AdController.php');
require('model/Model.php');


$page = filter_input(INPUT_GET,"page");

$route= array(
"home"=> HomeController::class,
"login"=> LoginController::class,
"ads"=> AllAdsController::class,
"newAd"=> NewAdController::class,

);

echo"test3";
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

