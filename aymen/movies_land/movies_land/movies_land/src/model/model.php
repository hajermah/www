<?php


class Model
{
    private $handle;

    public function __construct()
    {
        $db = BddAcces::getInstance();
        $this->handle = $db->getHandle();
    }

  
  public function addNewAd($title, $img, $year) {

        try {

            $request = $this->handle->prepare('INSERT INTO movies (`title`, `url`, `year`)
                                                        VALUES (?, ?, ?)');

            $request->execute(array(
                $title,
                $img,
                $year
                
                
            ));

        } catch (PDOException $e) {
            var_dump('Erreur lors de la requete SQL : ' . $e->getMessage());
        }
    }

    public function getAllAds() {

        try {

            $request = $this->handle->prepare('SELECT * FROM movies');
            $request->execute();

            $data = $request->fetchAll();

            return $data;

        } catch (PDOException $e) {
            var_dump('Erreur lors de la requete SQL : ' . $e->getMessage());
        }
    }

}