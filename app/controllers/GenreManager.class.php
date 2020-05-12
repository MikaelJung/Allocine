<?php


class GenreManager{

    private $_db; //l'objet PDO créé par le fichier dbconnect.php

    public function __construct($db){
        $this->setDb($db);
    }

    public function get($id){
        $genres = [];
        $id=$_GET['id_film'];
        $q = $this->_db->query('SELECT libelle_genre FROM Film f, Genre g, possede p WHERE f.id_film = p.id_film AND p.id_genre = g.id_genre AND f.id_film ='.$id);
        while ($data = $q->fetch()) {
            $genres[] = new Genre($data);
        }
        return $genres;
    }

    public function getList(){
        $genres = [];
        $q = $this->_db->query('SELECT * FROM Genre');
        while ($data = $q->fetch()) {
            $genres[] = new Genre($data);
        }
        return $genres;
    }


    public function setDb(PDO $db){
        $this->_db = $db;
    }
}






?>