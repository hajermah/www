<?php

class HomeController 
{
    private $title;

    public function __construct()

    {
          $this->title="bienvenue sur php exam";
    }

    function manage () {

        include(__DIR__."./../view/home.php");

    }
}