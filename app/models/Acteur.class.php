<?php 

class Acteur {
    private $id_acteur;
    private $nom_acteur;
    private $prenom_acteur;
    private $sexe_acteur;
    private $date_naissance_acteur;

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
     * Get the value of id_acteur
     */ 
    public function getId_acteur()
    {
        return $this->id_acteur;
    }

    /**
     * Set the value of id_acteur
     *
     * @return  self
     */ 
    public function setId_acteur($id_acteur)
    {
        $this->id_acteur = $id_acteur;

        return $this;
    }

    /**
     * Get the value of nom_acteur
     */ 
    public function getNom_acteur()
    {
        return $this->nom_acteur;
    }

    /**
     * Set the value of nom_acteur
     *
     * @return  self
     */ 
    public function setNom_acteur($nom_acteur)
    {
        $this->nom_acteur = $nom_acteur;

        return $this;
    }

    /**
     * Get the value of prenom_acteur
     */ 
    public function getPrenom_acteur()
    {
        return $this->prenom_acteur;
    }

    /**
     * Set the value of prenom_acteur
     *
     * @return  self
     */ 
    public function setPrenom_acteur($prenom_acteur)
    {
        $this->prenom_acteur = $prenom_acteur;

        return $this;
    }

    /**
     * Get the value of sexe_acteur
     */ 
    public function getSexe_acteur()
    {
        return $this->sexe_acteur;
    }

    /**
     * Set the value of sexe_acteur
     *
     * @return  self
     */ 
    public function setSexe_acteur($sexe_acteur)
    {
        $this->sexe_acteur = $sexe_acteur;

        return $this;
    }

    /**
     * Get the value of date_naissance_acteur
     */ 
    public function getDate_naissance_acteur()
    {
        return $this->date_naissance_acteur;
    }

    /**
     * Set the value of date_naissance_acteur
     *
     * @return  self
     */ 
    public function setDate_naissance_acteur($date_naissance_acteur)
    {
        $this->date_naissance_acteur = $date_naissance_acteur;

        return $this;
    }
}



?>