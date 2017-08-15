<?php

namespace App\controllers;
use App\models\Categorie;
use App\models\Model;
class CategorieController extends File
{
	/*$rep contient les vues client
	* render() prend en paramentre un tableau du type array('c','CXXXX.php') et retourne la chaine c\CXXX.php'
	*/
	private static $rep = "categorie";
	public function index()
    {		
     //var_dump("index");die();
	 $view = $this->render(array("views", self::$rep, "index.php"));
	 $this->pagetitle ="Accueil";
	 $pagetitle = $this->pagetitle;	
	 $categories = Model::selectAll();	
	require $this->render(array('views','layout.php'),$view);
    }
	
	 public function create()
    {
     $view = $this->render(array("views", self::$rep, "create.php"));
	 $this->pagetitle ="Create";
	 $pagetitle = $this->pagetitle;	
	require $this->render(array('views','layout.php'),$view);
    }
	//Création en base de données
	public function created()
    {	
    $view = $this->render(array("views", self::$rep, "created.php"));
	 $this->pagetitle ="Created";
	 $pagetitle = $this->pagetitle;	
	require $this->render(array('views','layout.php'),$view);
	}
	public function read()
    {	
    $view = $this->render(array("views", self::$rep, "read.php"));
	 $this->pagetitle ="Deatails";
	 $pagetitle = $this->pagetitle;	
	require $this->render(array('views','layout.php'),$view);
	}
}
