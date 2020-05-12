<?php 

class Genre {
    private $id_genre;
    private $libelle_genre;


     public function __construct($valeurs = array())
    {
        if (!empty($valeurs))
            $this->hydrate($valeurs);
    }

    public function hydrate(array $donnees){
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set' . str_replace(' ', '', ucwords($attribut));
            if (is_callable(array($this, $methode))) {
                $this->$methode($valeur);
            }
        }
    }   



    /**
     * Get the value of id_genre
     */ 
    public function getId_genre()
    {
        return $this->id_genre;
    }

    /**
     * Set the value of id_genre
     *
     * @return  self
     */ 
    public function setId_genre($id_genre)
    {
        $this->id_genre = $id_genre;

        return $this;
    }

    /**
     * Get the value of libelle_genre
     */ 
    public function getLibelle_genre()
    {
        return $this->libelle_genre;
    }

    /**
     * Set the value of libelle_genre
     *
     * @return  self
     */ 
    public function setLibelle_genre($libelle_genre)
    {
        $this->libelle_genre = $libelle_genre;

        return $this;
    }

    
}