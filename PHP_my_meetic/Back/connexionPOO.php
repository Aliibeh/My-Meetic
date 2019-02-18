<?php

require_once "errorco.php";

class login extends New_PDO{

	public function log_in(){
		if(!empty($_POST)){
			$req = parent::$bdd->prepare("SELECT * FROM members
											WHERE mdp = :mdp OR email = :mail");

			$req->execute([':mdp'=>$_POST['pass'], ':mail'=>$_POST['email']]);
			$login = $req->fetch(PDO::FETCH_ASSOC);
			session_start();
			$_SESSION['id'] = $login['id_mem'];
			$_SESSION['nom'] = $login['nom'];
			$_SESSION['prenom'] = $login['prenom'];
			$_SESSION['email'] = $login['email'];
			$_SESSION['pseudo'] = $login['pseudo'];
			$_SESSION['desc'] = $login['description'];
			$_SESSION['ville'] = $login['ville'];
			$_SESSION['mdp'] = $login['mdp'];
			$_SESSION['naissance'] = $login['naissance'];
			header('Location: profil.php');
		}
	}
}

$test = new login();
$test->log_in();
