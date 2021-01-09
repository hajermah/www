<?php

class adsmovieController
{
    public $title;
    public $model;
    public $moviesList;

    public function __construct()
    {
        $this->title = "Liste des films";
        $this->model = new Model();
    }

    function manage() {

       $this->moviesList = $this->model->getAllAds();

    


        include(__DIR__ . "./../../view/ads_movie.php");



         }

     }