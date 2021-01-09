<?php

class SearchController
{
    private $title;
    private $model;

    public function __construct()
    {
        $this->title = "Recherche:";
        $this->model = new Model();
    }
    function manage()
    {
        include (__DIR__ . "./../../view/search.php");
    }
}