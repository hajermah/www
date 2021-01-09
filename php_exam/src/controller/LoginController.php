<?php

class LoginController 
{
    private $title;
    private $model;

    public function __construct()

    {
          $this->title="identifiez-vous!";
          $this->model=new Model();
    }

    function manage () {

     if(isset($_POST['type']))  {

        if($_POST['type']   ==='signup' and
           $_POST['pswd2']  !=''      and
           $_POST['email2'] !=''
        )  {

        $pswdHash= password_hash($_POST['pswd2'], PASSWORD_DEFAULT );

        $this->model->addNewUser($_POST['email2'], $pswdHash);
           }
     }



        include(__DIR__."./../view/login.php");
    }
}