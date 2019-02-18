<?php

require_once "errorco.php";

class deco extends New_PDO{

	public function deconnexion(){
		session_start();
		session_destroy();
		header('Location: ../Front/index.php');
		exit;
	}
}

$test = new deco();
$test->deconnexion();
