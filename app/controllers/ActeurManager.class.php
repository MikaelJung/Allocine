<?php


class ActeurManager{

    private $_db; //l'objet PDO créé par le fichier dbconnect.php

    public function __construct($db){
        $this->setDb($db);
    }

     public function get($id){
        $id=$_GET['id_film'];
        $q = $this->_db->query('SELECT prenom_acteur,nom_acteur FROM Film f, Acteur a, joue j WHERE f.id_film = j.id_film AND a.id_acteur = j.id_acteur AND f.id_film ='.$id);
        while ($data = $q->fetch()) {
            $acteurs[] = new Acteur($data);
        }
        return $acteurs;
    }

    public function getList(){
        $acteurs = [];
        $q = $this->_db->query('SELECT * FROM Acteur');
        while ($data = $q->fetch()) {
            $acteurs[] = new Acteur($data);
        }
        return $acteurs;
    }

    public function setDb(PDO $db){
        $this->_db = $db;
    }
}






?>