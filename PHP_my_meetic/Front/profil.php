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
		<h1 class="text-center">PROFIL</h1>
	</header>
		
	<div class="container">
		<img src="./Images/photo.jpg" width="100" class="photo" alt="#">
	
		<div class="pseudo">
			<h4>Pseudo :</h4>
			<p><?php echo $_SESSION['pseudo']?></p><a href="modifierPseudo.php">modifier</a>
		</div>

		<table class="table2 table w-25">
			<thead class="thead-dark">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo $_SESSION['prenom']?></td>
					<td><?php echo $_SESSION['nom']?></td>
				</tr>
			</tbody>
		</table>

		<button class="btn btn-lg btn-danger bouton" value="Deconnexion"><a href="../Back/deconnexionPOO.php">Deconnexion</a></button>
		<table class="table table3">
			<thead class="thead-dark">
				<tr>
					<th>Naissance</th>
					<th>Ville</th>
					<th>Email</th>
					<th>Password</th>
					<th>Description</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo $_SESSION['naissance']?></td>
					<td><?php echo $_SESSION['ville']?>  &nbsp <a href="modifierVille.php">modifier</a></td>
					<td><?php echo $_SESSION['email']?></td>
					<td><?php echo $_SESSION['mdp']?>  &nbsp <a href="modifierMDP.php">modifier</a></td>
					<td><?php echo $_SESSION['desc']?>  &nbsp <a href="modifier.php">modifier</a></td>
				</tr>
			</tbody>
		</table>
	</div>

	<footer class="footer">
		<?php include "footer.php"?>
	</footer>

</body>
</html>