<?php
 include'class.connec.php';


class Login extends Db
{

	public function login()
	{
		$bdd = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbMDP);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (!empty($_POST)) {
			$req ="SELECT * FROM fiche_personne WHERE password = :password AND pseudo = :pseudo OR email = :email";
			$login_requete = $bdd->prepare($req);
			$login_requete->execute(array(':pseudo'=>$_POST['username'],':email'=>$_POST['username'],':password'=>$_POST['password']));
			$login_sql=$login_requete->fetch(PDO::FETCH_ASSOC);
			var_dump($login_sql);
			session_start();
			$_SESSION['login'] = $login_sql['id_membre'];
			header('Location: test.php');
		}
	}
}

if(!empty($_POST))
{
	$log = new Login();
	$log->login();
}