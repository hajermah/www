<?php


class NewAdController
{

    public $title;
    public $model;

    public function __construct()
    {
        $this->title = "Ajoutez votre film";
        $this->model = new Model();
    }

    function manage() {


        if (isset($_POST['title']) AND $_POST['title'] != '') {

            $this->model->addNewAd($_POST['title'], $_POST['img'], $_POST['year']);
        }

        include(__DIR__ . "./../../view/movie1.php");
    }

}