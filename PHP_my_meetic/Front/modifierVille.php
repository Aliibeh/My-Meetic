<?php session_start()?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
    <title>Meet Me</title>
    <link rel="icon" type="image/png" href="./Images/meetme2.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

	<header>
		<?php include "header2.php"?>
	</header>

	<h3 class="text-center">Modifier l'élément de votre choix :</h3>
	<h6 class="text-center">(Il faudra vous reconnecter après avoir changer l'élément afin de voir les modifications.)</h6>

	<div class="container">
		<form method="POST">
			
			<div class="text-center">
				<label class="blanco">Modifier la ville :
					<input type="password" name="ville2" class="form-control" placeholder="Change your city">
				</label>
			</div>
				
			<div class="text-center">
				<input type="submit" name="modif" class="btn btn-danger bouton" value="Modifier">
			</div>
		</form>

	</div>
	<footer>
		<?php include "footer.php"?>
	</footer>
<?php include "../Back/modifierVillePOO.php"?>
</body>
</html>