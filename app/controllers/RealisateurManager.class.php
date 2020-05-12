<?php


class RealisateurManager{

    private $_db; //l'objet PDO créé par le fichier dbconnect.php

    public function __construct($db){
        $this->setDb($db);
    }

     public function get($id){
        $id=$_GET['id_film'];
        $q = $this->_db->query('SELECT prenom_realisateur,nom_realisateur FROM Film f, Realisateur r WHERE f.id_realisateur = r.id_realisateur AND f.id_film ='.$id);
        $data = $q->fetch();
        return new Realisateur($data);
    }

    public function getList(){
        $realisateurs = [];
        $q = $this->_db->query('SELECT * FROM Realisateur');
        while ($data = $q->fetch()) {
            $realisateurs[] = new Realisateur($data);
        }
        return $realisateurs;
    }

    public function setDb(PDO $db){
        $this->_db = $db;
    }
}






?>