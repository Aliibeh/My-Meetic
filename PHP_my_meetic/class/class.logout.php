<?php
include('class.connec.php');

class Logout extends Db
{
	public function is_loggedin()
	{
		if(isset($_SESSION['login']))
		{
			return true;
		}
	}

	public function logout()
	{
		session_start();
		unset($_SESSION['login']);
		session_destroy();
		header('location: ../login.php');
		return true;
	}
}

$sess = new Logout();
if($sess->is_loggedin() === true)
{
	$sess->logout();
}
