<?php
//Permet de stocker les informations dans un cookie.
setcookie('id', $_POST['login']);
setcookie('pass', $_POST['password']);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo4</title>
    </head>
    <body>
        <div class="background">
            <h1 class="text">PHP partie 8 - Exo 4 :</h1>
        </div>
        <?php
        //Renvoie sur la page "user.php"
        header("location: user.php");
        ?>
    </body>
</html>