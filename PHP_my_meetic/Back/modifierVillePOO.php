<?php

require_once "errorco.php";

class Modifier3 extends New_PDO{

	public function change(){
		if(!empty($_POST)){
			$req = parent::$bdd->prepare("UPDATE members
										SET ville = ? WHERE id_mem=?");

			$req->execute([$_POST['ville2'], $_SESSION['id']]);

		}
	}
}

$test = new Modifier3();
$test->change();