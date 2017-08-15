<?php
namespace App\controllers;

use App\models\Model;
use App\models\Personne;
class MedecinController extends File
{
	
	private static $rep = "medecin";
	protected static $object='personne';
   
    public function reserver()
    {
     $medecins = Personne::selectAll();		
	 $view = $this->render(array("views", self::$rep, "reserver.php"));
	 $this->pagetitle ="Resevation";
	 $pagetitle = $this->pagetitle;	
	require $this->render(array('views','layout.php'),$view);
    }
	//Liste rendez vous
	public function liste()
    {
      if(isset($_POST['medecin'])&& $_POST['date_rdv']){ 
       $dateFr = $this->dateString($_POST['date_rdv']);
	   $code_medecin= $_POST['medecin'];
	   $view = $this->render(array("views", self::$rep, "liste.php"));
	   $this->pagetitle ="Resevation";
	   $pagetitle = $this->pagetitle;	
	   require $this->render(array('views','layout.php'),$view); 
	  }		
	 
    }
	public function index()
    {
      if(isset($_POST['medecin'])&& $_POST['date_rdv']){ 
       $dateFr = $this->dateString($_POST['date_rdv']);
	   echo "index Medecin!".$_POST['medecin']."-".$dateFr;
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
