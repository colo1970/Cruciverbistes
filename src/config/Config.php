<?php
    namespace App\config;
 //Classe qui initialise les parametre de connection
  class Config{	   
	  
	 static private $databases = array(
		'hostname' => 'localhost',
		'database' => 'bdcurciverbiste',
		'login' => 'root',
		'password' => ''
	  );
	   
	static public function getLogin() {
		return self::$databases['login'];
	}
	static public function getHostname(){
	  return self::$databases['hostname'];
	}
    static public function getDatabase(){
	 return self::$databases['database'];
	}
	static public function getPassword() {
	 return self::$databases['password'];
	}
	}
?>