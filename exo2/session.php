<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo2</title>
    </head>
    <body>
        <div class="background">
            <h1 class="text">PHP partie 8 - Exo 2 :</h1>
        </div>
        <?php
        if(isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['age'])){
            echo 'Bonjour ' . $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' vous avez ' . $_SESSION['age'] . '.';
        } else {
            echo 'Variable manquante ' . '<a href="index.php">Cliquez-ici!</a>';
        }
        ?>
    </body>
</html>