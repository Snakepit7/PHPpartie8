<?php
//Définition  des cookies à envoyer
setcookie('id', $_POST['login']);
setcookie('pass', $_POST['password']);
?>
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
        //Redirection automatique sur user.php
        header("location: user.php");
        exit;
        ?>
    </body>
</html>