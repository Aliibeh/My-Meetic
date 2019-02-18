<?php 
include'class.connec.php';

class Envoie extends Db{


	public function Insertion(){
		$bdd = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbMDP);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (!empty($_POST)) {
			$_POST['password']=password_hash($_POST['password'], PASSWORD_DEFAULT);
			$req = $bdd->prepare("INSERT INTO fiche_personne(sexe, pseudo, nom, prenom, naissance, email, password, description)
									VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
			$req->execute([$_POST['sexe'], $_POST['pseudo'], $_POST['nom'], $_POST['prenom'], $_POST['date_de_naissance'], $_POST['email'], $_POST['password'], $_POST['desc']]);
		}
	}

	public function verif()
	{
		// if ($this->_password != $this->_password2) {
		// 	die('<h1 class="ERROR">Passwords are not the same.</h1>');
		// }
		$age = ((time() - strtotime($_POST['date_de_naissance'])) / 3600 / 24 / 365);
		if ($age < 18) {
			die('<h1 class="ERROR">You need to be 18 to register.</h1>');
		}else {
			return true;
		}
	}
}

if(!empty($_POST))
{
	$test = new Envoie();
	$test->verif();
	$test->Insertion();
	header('Location: ./index.php');
}