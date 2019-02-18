<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Meet Me</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">S'Inscrire<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="indexConnexion.php">Se Connecter<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="indexMembres.php">Membres<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Support<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <a class="navbar-brand" href="index.php">
                    <img src="./Images/meetme2.png" alt="meet_me" width="50">
                </a>

                <form class="form-inline my-2 my-lg-0" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="recherche">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </nav>
    </header>
</body>

</html>