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
        <?php include "header.php"?>
        <h1 class="text-center">INSCRIPTION</h1>
        <h6 class="text-center">(Gratuite et reservée au plus de 18 ans)</h6>
    </header>
    
    <div class="container">
        <div class="back">
            <form method="POST">
                <div>
                    <div>
                        <label>Sexe :
                            <select class="form-control" name="sexe">
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                                <option value="autre">Autre</option>
                            </select>
                        </label>
                    </div>

                    <div>
                        <label>Date de naissance :
                            <input type="date" name="birth" class="form-control">
                        </label>
                    </div>

                    <div>
                        <label>Pseudo :
                            <input type="text" name="pseudo" class="form-control" placeholder="Username">
                        </label>
                    </div>

                    <div>
                        <label>E-Mail
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </label>
                    </div>
                </div>

                <div class="right">

                    <div>
                        <label>Prénom
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                        </label>
                    </div>

                    <div>
                        <label>Nom :
                            <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                        </label>
                    </div>

                    <div>
                        <label>Mot de passe :
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </label>
                    </div>

                    <div>
                        <label>Ville :
                            <input type="text" name="ville" class="form-control" placeholder="City">
                        </label>
                    </div>
                </div>

                <div>
                    <label>Description :
                        <textarea name="desc" class="form-control texte"></textarea>
                    </label>
                </div>

                <input type="submit" value="Register" class="btn btn-lg btn-danger">
            </form>
        </div>
    </div>

    

    <footer>
        <?php include "footer.php"?>
    </footer>
<?php include "../Back/inscriptionPOO.php"?>
</body>

</html>

