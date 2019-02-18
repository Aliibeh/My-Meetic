<?php

require_once "errorco.php";

class Modifier2 extends New_PDO{

	public function change(){
		if(!empty($_POST)){
			$_POST['mdp2'] = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
			$req = parent::$bdd->prepare("UPDATE members
										SET mdp = ? WHERE id_mem=?");

			$req->execute([$_POST['mdp2'], $_SESSION['id']]);

		}
	}
}

$test = new Modifier2();
$test->change();