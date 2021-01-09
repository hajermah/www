<?php

class homeController
{

    private $title;

    public function __construct()
    {
        $this->title = "Bienvenue sur Movies Land";
    }

    function manage() {


        include(__DIR__ . "./../../view/home.php");
    }

}