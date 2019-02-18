<?php 

class Db {
	public $bdd;
	public $dbHost = 'localhost';
	public $dbName = 'my_meetic';
	public $dbUser = 'root';
	public $dbMDP = '';

	public function Connexion(){
		$bdd = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbMDP);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $bdd;
	}
}
$inst = new Db;
$inst->Connexion();