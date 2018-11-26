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
        $_SESSION['lastname']='Dupond';
        $_SESSION['firstname']='Roger';
        $_SESSION['age']=42;
        echo '<a href="session.php">Cliquez-ici!</a>';
        ?>
    </body>
</html>