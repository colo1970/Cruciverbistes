<?php
namespace App\controllers;

use App\models\Model;
use App\models\Personne;
use App\models\Creneaux;
use App\models\RendezVous;
class CreneauxController extends File
{
	
	private static $rep = "creneaux";
	protected static $object='personne';
  
	//Liste rendez vous
	public function liste()
	{  
	
    
	 if(isset($_POST['medecin'])&& $_POST['date_rdv']){ 
       $dateFr = $this->dateString($_POST['date_rdv']);
	   $code_medecin= $_POST['medecin'];
	   $creneaux = Creneaux::getRvMedecinJour($code_medecin,"2017-07-30");
	   $view = $this->render(array("views", self::$rep, "liste.php"));
	   $this->pagetitle ="Liste Creneaux";
	   $pagetitle = $this->pagetitle;	
	   require $this->render(array('views','layout.php'),$view);  
	 }
    }
	 public function afficher()
    {
        echo "Afficher!";
    }	
	public function rechercher()
    {
        echo "Recherche!";
    }
	public function error()
    {
        echo "Page Error!";
    }
	
	
}
