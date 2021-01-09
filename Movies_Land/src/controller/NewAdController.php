<?php

class NewAdController 
{

    private $title;
    private $model;
    private $request;
    private $alertPublic;

    public function __construct()

    {
          $this->title="ajouter un film";
          $this->model=new Model;
        
    }
    
    function manage () {

        var_dump('A');

        if(isset($_POST['title']) and $_POST['title'] !=''){

            var_dump($_POST['date']);

            $this->request = $this->model->addNewAd($_POST['title'], $_POST['title'], $_POST['url'], $_POST['date']);
            if($this->request===true){
                $this->alertPublic= "film ajouter";
            } else {
                $this->alertPublic="Echec";
        }
        
        }


        include(__DIR__."./../view/newAd.php");

    }
}