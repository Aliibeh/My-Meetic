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
		<h1 class="text-center">MEMBRES</h1>
	</header>
	
	<div class="container">
        <table class="table">
  			<thead class="thead-dark">
  				<tr>
  					<th>Pseudo</th>
            <th>Sexe</th>
  					<th>Ville</th>
  				</tr>
  			</thead>

  			<tbody>
  				<tr>
  					<td><?php echo $_POST['pseudo']?></td>
  					<td><?php echo $_POST['sexe']?></td>
            <td><?php echo $_POST['ville']?></td>
  				</tr>
  			</tbody>

  		</table>
    </div>
    
	<footer>
		<?php include "footer.php"?>
	</footer>
</body>
</html>