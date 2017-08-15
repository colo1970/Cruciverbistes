<?php

namespace App\controllers;
use App\models\Joueur;
use App\models\Categorie;
use App\models\Model;
class InscriptionController extends File
{
	/*$rep contient les vues client
	* render() prend en paramentre un tableau du type array('c','CXXXX.php') et retourne la chaine c\CXXX.php'
	*/
	private static $rep = "inscription";//repertoire des vues du controller 
	//liste des des inscrits pour la prochaine rancontre
	public function inscrit()
    {
     $inscris = Model::inscrisNext();
		
     if($inscris==null){
		  $this->pagetitle ="Pas Inscrit";
	  $pagetitle = $this->pagetitle;
	  $view = $this->render(array("views", self::$rep, "pasinscrit.php")); 
	
	 
	 
	 }else{	
 
	 $view = $this->render(array("views", self::$rep, "inscrit.php"));
	 
	 $this->pagetitle ="Inscrit";
	 $pagetitle = $this->pagetitle;	
	 $lieu_date = Model::getLieuDate();
	 $datefr =  $this->dateString($lieu_date->get('date'));	
	 $lieu = $lieu_date->get('lieu');

	 }	 
 require $this->render(array('views','layout.php'),$view);
    }
	//Classement mensuel
  public function classementMois()
   {
	 //chargement de la date
     $mois_epreuves = Model::getDate();			 
	 $view = $this->render(array("views", self::$rep, "classementMois.php"));
	 $this->pagetitle ="Classement Mensuel";
	 $pagetitle = $this->pagetitle;	
	require $this->render(array('views','layout.php'),$view);
   }
//Recuperation de la date à partir ajax
  public function recupDate()
  {    
   if(isset($_POST['date_mois'])){	   
	list($j,$a) = explode("/",$_POST['date_mois']);
	$retjson = Model::mensuelByDate($j,$a);
	//transforme ma données en json grace à json_encode
    echo json_encode($retjson);
   } 
 }
 public function testModale()
 {    
  //chargement de la date
     $mois_epreuves = Model::getDate();			 
	 $view = $this->render(array("views", self::$rep, "inscrire.php"));
	 $this->pagetitle ="s'inscrire";
	 $pagetitle = $this->pagetitle;	
	require $this->render(array('views','layout.php'),$view);
 }
 public function resultModale()
 { 
  if(isset($_POST['username'])){ 
   $username =$_POST['username'];
   var_dump("Resultat modal ".$username);die();
  }
 }
}
