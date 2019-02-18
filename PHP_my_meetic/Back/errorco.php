<?php 

class New_PDO{
	public static $bdd;
	private static $dbHost = 'localhost';
	private static $dbName = 'meet_me';
	private static $dbUser = 'root';
	private static $dbMDP = '';

	public static function Connexion(){
		$bdd = new PDO('mysql:host='.self::$dbHost.';dbname='.self::$dbName, self::$dbUser, self::$dbMDP);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$bdd = $bdd;
	}
}

$test = new New_PDO();
$test->Connexion();