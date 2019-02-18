
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
	<a href="index.php"><img class="logo" src="image/logo.png" alt="logo_meet"></a>
	<div class="login">
		<h6><a href="login.php">Déjà membre ?</a></h6>
	</div>
</header>
<div class="container">
	<?php
	include'class/class.user.php';
	?>
	<div class="back_form col-lg-12">
	<h2>Inscrivez vous gratuitement !</h2>
	<small id="birth" class="form-text text-muted">Inscription réservé +18</small>
	<form method="post" action="" id="inscription"> 
		<br>

		<div>
			<label>Je suis : </label>
			<select name="sexe" class="form-control">
				<option value="Homme">Un homme</option>
				<option value="Femme">Une femme</option>
				<option value="Autre">Autre</option>
			</select>
		</div>
		<br>

		<div>
			<label for="pseudo">Pseudo :</label><br>
			<input type="text" name="pseudo" minlength="2" class="form-control">
		</div>

		<div>
			<label for="nom">Nom :</label><br>
			<input type="text" name="nom" class="form-control">
		</div>

		<div>
			<label for="prenom">Prenom :</label><br>
			<input type="text" name="prenom" class="form-control">
		</div>

		<div>
			<label for="date_de_naissance">Date de naissance :</label><br>
			<input type="date" name="date_de_naissance" class="form-control">
		</div>

		<div>
			<label for="email">Email :</label><br>
			<input type="email" name="email" class="form-control">
		</div>

		<div>
			<label for="password">Mot de passe :</label><br>
			<input type="password" name="password" minlength="8" placeholder="8 caractères minimum" class="form-control">
		</div>

		<div>
			<label for="description">Description : </label><br>
			<textarea name="desc" class="form-control"></textarea>
		</div>
		<div>
			<br>
			<input type="submit" name="validation" value="valider" class="form-control">
		</div>
	</div>
</form>
</div>
</body>
</html>