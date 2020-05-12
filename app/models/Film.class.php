<?php 

class Film {
    private $id_film;
    private $titre_film;
    private $annee_film;
    private $duree_film;
    private $synopsis_film;
    private $note_film;
    private $affiche_film;
    private $bande_annonce_film;

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
     * Get the value of id_film
     */ 
    public function getId_film()
    {
        return $this->id_film;
    }

    /**
     * Set the value of id_film
     *
     * @return  self
     */ 
    public function setId_film($id_film)
    {
        $this->id_film = $id_film;

        return $this;
    }

    /**
     * Get the value of titre_film
     */ 
    public function getTitre_film()
    {
        return $this->titre_film;
    }

    /**
     * Set the value of titre_film
     *
     * @return  self
     */ 
    public function setTitre_film($titre_film)
    {
        $this->titre_film = $titre_film;

        return $this;
    }

    /**
     * Get the value of annee_film
     */ 
    public function getAnnee_film()
    {
        return $this->annee_film;
    }

    /**
     * Set the value of annee_film
     *
     * @return  self
     */ 
    public function setAnnee_film($annee_film)
    {
        $this->annee_film = $annee_film;

        return $this;
    }

    /**
     * Get the value of duree_film
     */ 
    public function getDuree_film()
    {
        return $this->duree_film;
    }

    /**
     * Set the value of duree_film
     *
     * @return  self
     */ 
    public function setDuree_film($duree_film)
    {
        $this->duree_film = $duree_film;

        return $this;
    }

    /**
     * Get the value of synopsis_film
     */ 
    public function getSynopsis_film()
    {
        return $this->synopsis_film;
    }

    /**
     * Set the value of synopsis_film
     *
     * @return  self
     */ 
    public function setSynopsis_film($synopsis_film)
    {
        $this->synopsis_film = $synopsis_film;

        return $this;
    }

    /**
     * Get the value of note_film
     */ 
    public function getNote_film()
    {
        return $this->note_film;
    }

    /**
     * Set the value of note_film
     *
     * @return  self
     */ 
    public function setNote_film($note_film)
    {
        $this->note_film = $note_film;

        return $this;
    }

    /**
     * Get the value of affiche_film
     */ 
    public function getAffiche_film()
    {
        return $this->affiche_film;
    }

    /**
     * Set the value of affiche_film
     *
     * @return  self
     */ 
    public function setAffiche_film($affiche_film)
    {
        $this->affiche_film = $affiche_film;

        return $this;
    }


    /**
     * Get the value of bande_annonce_film
     */ 
    public function getBande_annonce_film()
    {
        return $this->bande_annonce_film;
    }

    /**
     * Set the value of bande_annonce_film
     *
     * @return  self
     */ 
    public function setBande_annonce_film($bande_annonce_film)
    {
        $this->bande_annonce_film = $bande_annonce_film;

        return $this;
    }
}



?>