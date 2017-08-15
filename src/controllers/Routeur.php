<?php

namespace App\controllers;

class Routeur 
{ 
     
	 public static function routeur(){
	  if(isset($_GET['controller'])){
		$controller=$_GET['controller'];
	  }else{
		$controller="categorie";
	  }
	  $class = "App\controllers\\" . ucfirst($controller)."Controller";	
	  if(class_exists($class)){
	   $class_methods = get_class_methods($class);
	   if(isset($_GET['action'])){
		if(in_array($_GET['action'],$class_methods)){
		  $action = $_GET['action'];  		  
	  }else{
		$action='error';
	  }
	  }else{
		$action='index';
	 }

	 }
	 $c = new $class();
     $c->$action();
	 }
}
