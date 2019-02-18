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
        <?php include "header.php"?>
        <h1 class="text-center">CONNEXION</h1>
    </header>

    <div class="container">
        <div class="back">
            <form method="POST">
                <div class="form-group identifiant">
                    <label class="label">Identifiant</label>
                    <input type="email" name="email" class="form-control identifiant2" placeholder="Enter email">
                </div>

                <div class="form-group identifiant">
                    <label class="label2">Mot de passe</label>
                    <input type="password" name="pass" class="form-control identifiant2" placeholder="Password">
                </div>
                
                <input type="submit" value="Connexion" class="btn btn-lg btn-danger bouton">

            </form>
        </div>
    </div>

    <footer>
        <?php include "footer.php"?>
    </footer>
    
</body>
</html>