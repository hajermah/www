<?php


class BddAcces
{

    private static $instance = null;
    private $handle;

    public function __construct()
    {
        $host   = "127.0.0.1";
        $user   = "root";
        $pswd   = "root";
        $dbName = "movies_land";

        try {

            $this->handle = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8",
                $user, $pswd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );

        } catch (PDOException $e) { 
            die('Echec de la connexion : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {

        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getHandle()
    {
        return $this->handle;
    }

}