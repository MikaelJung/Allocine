<?php


class FilmManager{

    private $_db; //l'objet PDO créé par le fichier dbconnect.php

    public function __construct($db){
        $this->setDb($db);
    }

    public function get($id){
        $id=$_GET['id_film'];
        $q = $this->_db->query('SELECT * FROM Film WHERE id_film ='.$id);
        $data = $q->fetch();
        return new Film($data);
    }

    public function getList(){
        $films = [];
        $q = $this->_db->query('SELECT * FROM Film');
        while ($data = $q->fetch()) {
            $films[] = new Film($data);
        }
        return $films;
    }

    public function afficherFilm(){
        $libelle=$_GET['libelle_genre'];
        $q = $this->_db->query('SELECT titre_film, affiche_film FROM Film, Genre, possede WHERE Film.id_film = possede.id_film AND possede.id_genre = Genre.id_genre AND Genre.libelle_genre ='.$libelle);
        $data = $q->fetch();
        return new Film($data);
    } 

    public function setDb(PDO $db){
        $this->_db = $db;
    }
}






?>