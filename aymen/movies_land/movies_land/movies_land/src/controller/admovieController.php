<?php


class admovieController
{

    public $title;

    public function __construct()
    {
        $this->title = "Détails du film";
    }

    function manage() {


        include(__DIR__ . "./../../view/ad_movie.php");
    }

}