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
        <div class="background">
            <h1 class="text">PHP partie 8 - Exo 5 :</h1>
        </div>
        <?php
        //Déclaration des variables avec les valeurs du formulaire de modification
        $loginMod=$_POST['loginmod'];
        $passwordMod=$_POST['passwordmod'];
        //Modification des valeurs des cookies suite aux infos rentrées dans le formulaire de modif'
        setcookie('id', $loginMod);
        setcookie('pass', $passwordMod);
        //Redirection automatique sur user.php
        header("location: user.php");
        exit;
        ?>
    </body>
</html>