<?php

class searchController 
{
    private $title;

    public function __construct()

    {
          $this->title="Rechercher un film";
    }

    function manage () {

        include(__DIR__."./../view/search.php");
    }
}