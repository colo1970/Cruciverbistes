<?php

namespace App\controllers;


  public function test()
  {	
   $cat =  Model::selectAll();
   if(isset($_POST['date_mois'])){
	var_dump($_POST['date_mois']); die(); 
   }
