<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo5</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 8 - Exo 5 :</h1>
        </div>
       <?php
       //Affichage des valeurs des cookies (miam!)
       echo $_COOKIE['id'] . ' ' . $_COOKIE['pass'];
       //Bouton retour
       echo '<a href="index.php">Retour</a>';
       ?>
        <!-- Bouton qui renvoie sur le formulaire de modification -->
        <a href="formcookie.php"><input value="Modifier" /></a>
    </body>
</html>