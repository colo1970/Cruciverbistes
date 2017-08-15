<?php
	namespace App\models;
	
	class Categorie extends Model{	   
	  private $id;
	  private $nom_cat;	 
	  
	  public function getId() {
		  return $this->id;
	  } 
	  public function getNomCat() {
		  return $this->nom_cat;
	  }
	  public function setNomcat($nom) {
		  $this->nom_cat = $nom_cat;
	  }
}