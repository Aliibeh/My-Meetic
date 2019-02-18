<?php

require_once "errorco.php";

class Envoie extends New_PDO{
	
	public function inscript(){
		if(!empty($_POST)){
			$_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
			$req = parent::$bdd->prepare("INSERT INTO members (nom, prenom, naissance, sexe, ville, pseudo, mdp, description, email)
										VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

			$req->execute([$_POST['lastname'], $_POST['firstname'], $_POST['birth'], $_POST['sexe'], $_POST['ville'], $_POST['pseudo'], $_POST['pass'], $_POST['desc'], $_POST['email']]);
		}
		else{
			echo "Veuillez remplir tous les champs";
		}
	}
}

$test = new Envoie();
$test->inscript();