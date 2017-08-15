<?php
  namespace App\models;
	 
  use App\config\Config;
  use App\models\Joueur;
  use \PDO;
  class Model{
	//stocke ma cnn
	private static $pdo;	
    public static function getPdo(){
	 return self::$pdo;
	}	
    public static function Init(){
	 $hostname = Config::getHostname();
	 $database_name = Config::getDatabase();
	 $login = Config::getLogin();
	 $password = Config::getPassword();
	 /*on initialise $pdo à la connection new PDO() ie on stocke new PDO() dans self::$pdo.
	  PDO::MYSQL_ATTR_INIT_COMMAND indique l'encodage des chaines en entrée et sortie de MySql
	 */
	  if(self::$pdo===null){
	     self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
					 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));   
	   // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
	    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   }
	}
    public static function selectAll(){
	 $rep = self::getPdo()->query("SELECT*FROM joueur ");	  
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\Joueur');    
	 $tab = $rep->fetchAll();
	 
	 return $tab;
	}
	  public static function inscrisNextold(){
	 $rep = self::getPdo()->query("SELECT*FROM joueur j 
	 INNER JOIN participer p ON j.id=p.id_joueur 
	 INNER JOIN epreuve e ON e.id=p.id_epreuve INNER JOIN categorie cat ON cat.id = j.id_categorie
	 WHERE e.date = (SELECT MAX(date)FROM epreuve)");	  
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\joueur');    
	 $tab = $rep->fetchAll();
	// var_dump($tab);die();
	 return $tab;
	}
	 public static function inscrisNext(){
	 $rep = self::getPdo()->query("SELECT*FROM joueur j 
	 INNER JOIN participer p ON j.id=p.id_joueur 
	 INNER JOIN epreuve e ON e.id=p.id_epreuve INNER JOIN categorie cat ON cat.id = j.id_categorie
	 WHERE p.points IS NULL AND e.date = (SELECT MAX(date)FROM epreuve)");	  
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\Joueur');    
	 $tab = $rep->fetchAll();
	 return $tab;
	}
	//categorie
	 public static function categorieById($id){
	 $rep = self::getPdo()->query("SELECT*FROM categorie	 
	        WHERE id =:id");
     $rep->setParameter(array('id'=>$id));			
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\joueur');    
	 $tab = $rep->fetchAll();
	// var_dump($tab);die();
	 return $tab;
	}
	//reurn date et lieu epreuve
	public static function getLieuDate(){
	 $rep = self::getPdo()->query("SELECT*FROM epreuve ORDER BY date DESC LIMIT 1");
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\epreuve');    
	 $tab = $rep->fetch();
	// var_dump($tab);die();
	 return $tab;
	}
	public static function mensuelold(){
	 $rep = self::getPdo()->query("SELECT nom, prenom, round(AVG(points),2) as moyenne FROM participer p 
	          JOIN epreuve e ON p.id_epreuve = e.id JOIN joueur j ON j.id=p.id_joueur 
              WHERE e.date BETWEEN '2017-07-01' AND '2017-07-31' GROUP BY id_joueur"); 
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\joueur');    
	 $tab = $rep->fetchAll();
	// var_dump($tab);die();
	return $tab;
	}
	public static function mensuel(){
	 $rep = self::getPdo()->query("SELECT nom, prenom, round(AVG(points),2) as moyenne FROM participer p 
	          JOIN epreuve e ON p.id_epreuve = e.id JOIN joueur j ON j.id=p.id_joueur 
              WHERE YEAR(e.date)-MONTH(e.date )= 2017-07 GROUP BY id_joueur"); 
	 $rep->setFetchMode(PDO::FETCH_CLASS,'App\models\joueur');    
	 $tab = $rep->fetchAll();
	// var_dump($tab);die();
	return $tab;
	}
	public static function mensuelByDate($mois,$an){
	 $rep = self::getPdo()->prepare("SELECT nom, prenom, round(AVG(points),2) as moyenne FROM participer p 
	          JOIN epreuve e ON p.id_epreuve = e.id JOIN joueur j ON j.id=p.id_joueur 
              WHERE YEAR(e.date)=:an AND MONTH(e.date)= :mois GROUP BY id_joueur"); 
	 $rep->execute(array('mois'=>$mois,'an'=>$an));
	 $rep->setFetchMode(PDO::FETCH_ASSOC);    
	 $tab = $rep->fetchAll();
	//var_dump($tab);die();
	return $tab;
	}
	//retourner le mois 
	public static function getDate(){
	 $rep = self::getPdo()->query("SELECT DISTINCT(MONTH(e.date))as mois, YEAR(e.date) as annee FROM participer p 
	 INNER JOIN epreuve e ON p.id_epreuve =e.id WHERE points IS NOT NULL ORDER BY mois DESC");
     $rep->setFetchMode(PDO::FETCH_ASSOC);    
	 $tab = $rep->fetchAll();
	// var_dump($tab);die();
	return $tab;
	}
}
 Model::Init();
 ?>