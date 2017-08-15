<?php
    namespace App\lib;
	class File{

	/*On passe en parametre un tableau du type array('controller','ControllerXXXX.php')
	et il nous retourne la chaine controller\ControllerXXX.php'
	*/
      public static function build_path($array=array()) {		
		$parent=dirname(__DIR__);		
	    //Decoupe les elements du tableau en fonction du separateur SEPARATOR definit dans index.php	
		return $parent. SEPARATOR .join(SEPARATOR, $array);
     }

   }
?>