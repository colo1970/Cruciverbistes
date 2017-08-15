<?php
  namespace App\models;  
  use App\models\Model;
  use \PDO;
  class Joueur extends Model{
	private $id;
	private $nom;
    private $prenom;
	private $adr;
	private $cp; 
	private $ville;
	private $tel;
	private $email;	
	private $sexe;
	private $id_categorie;
    protected static $object = 'personne';
    
	// Getter générique 
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }
    // Setter générique 
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }
	
  }
 ?>