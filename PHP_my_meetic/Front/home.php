<?php session_start()?>
<?php include "../Back/connexionPOO.php"?>
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

		<h1 class="text-center titre">BIENVENUE <?php echo $_SESSION['prenom']?></h1>

		<div class="home">
			<p>Vous êtes ici sur la page d'accueil de <strong>Meet Me</strong></p>
			<p>Si vous voulez naviguez, nous vous invitons à parcourir le menu.</p>
			<p>Nous espérons que grâce à <strong>Meet Me</strong>, vous trouverez l'amour que vous chercher.</p>
		</div>

	<footer>
		<?php include "footer.php"?>
	</footer>
</body>
</html>