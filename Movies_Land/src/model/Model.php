<?php


class Model
{
    private $handle;

    public function __construct() {

        $host = 'localhost';
        $user = 'root';
        $pswd = '';
        $dbName = 'movies_land';

        try {

            $this->handle = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pswd,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );

        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }

    }
 

    public function addNewAd($title, $url, $date){

        try{

            $request=$this->handle->prepare('INSERT INTO ads (ads_title, ads_date, ads_url)
                                            VALUES (?, ?, ?)'
        );

            $request->execute(array(
                $title,
                $date,
                $url
            ));

            return true;
    
        } catch(PDOException $e) {
            var_dump('ERR SQL : ' . $e->getMessage());
            return false;
         }
    }

    public function getAllAds() {

        try {

            $request = $this->handle->prepare('SELECT * FROM ads');
            $request->execute();

            $data=$request->fetchAll();

            return $data;

        } catch (PDOException $e) {
            var_dump('Erreur lors de la requete SQL: ' . $e->getMessage());
        }
    }
        
}
