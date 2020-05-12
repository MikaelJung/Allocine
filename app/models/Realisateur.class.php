<?php 

class Realisateur {
    private $id_realisateur;
    private $nom_realisateur;
    private $prenom_realisateur;


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
     * Get the value of id_realisateur
     */ 
    public function getId_realisateur()
    {
        return $this->id_realisateur;
    }

    /**
     * Set the value of id_realisateur
     *
     * @return  self
     */ 
    public function setId_realisateur($id_realisateur)
    {
        $this->id_realisateur = $id_realisateur;

        return $this;
    }

    /**
     * Get the value of nom_realisateur
     */ 
    public function getNom_realisateur()
    {
        return $this->nom_realisateur;
    }

    /**
     * Set the value of nom_realisateur
     *
     * @return  self
     */ 
    public function setNom_realisateur($nom_realisateur)
    {
        $this->nom_realisateur = $nom_realisateur;

        return $this;
    }

    /**
     * Get the value of prenom_realisateur
     */ 
    public function getPrenom_realisateur()
    {
        return $this->prenom_realisateur;
    }

    /**
     * Set the value of prenom_realisateur
     *
     * @return  self
     */ 
    public function setPrenom_realisateur($prenom_realisateur)
    {
        $this->prenom_realisateur = $prenom_realisateur;

        return $this;
    }
}