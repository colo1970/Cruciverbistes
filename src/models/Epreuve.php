<?php
  namespace App\models;  
  use App\models\Model;
  use \PDO;
  class Epreuve extends Model{
	private $id;
	private $lieu;
	private $date;
   
    protected static $object = 'creneaux';
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