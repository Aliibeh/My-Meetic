<?php

require_once "errorco.php";

class Recherche extends New_PDO{

	public function search(){
		if(isset($res)){
			$req = parent::$bdd->prepare("SELECT *
										FROM members
										WHERE ville LIKE ? OR sexe LIKE ?");

			$req->execute([$_POST['recherche']]);
			$rech = $req->fetch(PDO::FETCH_ASSOC);
			$_POST['ville'] = $rech['ville'];
			$_POST['sexe'] = $rech['sexe'];
			$_POST['pseudo'] = $rech['pseudo'];
			header('Location: indexMembres.php');
		}
	}
}

$test = new Recherche();
$test->search();