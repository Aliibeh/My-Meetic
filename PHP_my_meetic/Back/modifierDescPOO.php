<?php

require_once "errorco.php";

class Modifier4 extends New_PDO{

	public function change(){
		if(!empty($_POST)){
			$req = parent::$bdd->prepare("UPDATE members
										SET description = ? WHERE id_mem=?");

			$req->execute([$_POST['desc2'], $_SESSION['id']]);

		}
	}
}

$test = new Modifier4();
$test->change();