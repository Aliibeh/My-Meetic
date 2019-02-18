<?php

require_once "errorco.php";

class Modifier extends New_PDO{

	public function change(){
		if(!empty($_POST)){
			$req = parent::$bdd->prepare("UPDATE members
										SET pseudo = ? WHERE id_mem=?");

			$req->execute([$_POST['pseudo2'], $_SESSION['id']]);

		}
	}
}

$test = new Modifier();
$test->change();