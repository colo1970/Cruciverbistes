<?php

namespace App\controllers;

abstract class File 
{ 
  private $rep ;
  private $pagetitle ;
  //DIRECTORY_SEPARATOR crée un slash
  private static $separator = DIRECTORY_SEPARATOR;
 /* render() prend en paramentre un tableau du type array('c','CXXXX.php') et retourne la chaine c\CXXX.php'*/
  public function render($array = array(),$para=null){
	$rgp = dirname( __DIR__ );
  return $rgp.self::$separator.join(self::$separator,$array);	 
 } 
   public function getRep(){
	   return $this->rep;
   }
   public function setRep($rep){
	$this->rep = $rep;
   }
   public function dateString($date){
	 list($annee,$mois,$jour) = explode('-',$date);	
	 $df=$jour."/".$mois."/".$annee;
    return $df; 
   }
   public function dateAjaxEn($date){
	 
	list($jour,$annee) = explode("/",$date);	
	$dEn=$annee."-".$jour;
   return $dEn; 
   }
}
