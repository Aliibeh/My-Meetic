
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="shortcut icon"  href="image/icon.ico" />
	<script src = "js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>My_Meetic</title>
</head>
<body>
<header>
	<?php
		include 'class/class.login.php';
	if(!isset($_SESSION['login']))
	{
		?>
	<a href="index.php"><img class="logo" src="image/logo.png" alt="logo_meet"></a>
	<div class="login">
		<h6>Déjà membre ?</h6>
		<form method="post">
			<input type="text" name="username" id="login"placeholder="Username" required>
			<input type="password" name="password" id="login" placeholder="Password" required>
			<input type="submit" value="Login" id="login">
		</form>
	</div>
	<?php
}
else {	
?>
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="recherche.php">Recherche</a></li>
			<li><a href="class/class.logout.php">Logout</a></li>
		</ul>
	</div>
		<?php
	}
	?>
</header>