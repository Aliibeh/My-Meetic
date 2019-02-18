<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
    <title>Meet Me</title>
    <link rel="icon" type="image/png" href="./Images/meetme2.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleMenu.css" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            	<ul>
                    <li>
                        <a href="#">Menu</a>
                        <ul class="fallback">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="indexMembres.php">Membres</a></li>
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand" href="index.php">
                <img src="./Images/meetme2.png" alt="meet_me" width="50">
            </a>

  			<form class="form-inline my-2 my-lg-0" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="recherche">
                <input class="btn btn-success my-2 my-sm-0" type="submit" value="Search">
            </form>
        </nav>
	</header>

<?php include "../Back/searchPOO.php"?>
</body>
</html>