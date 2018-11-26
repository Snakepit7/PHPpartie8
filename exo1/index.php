<?php
$serverUser = $_SERVER['HTTP_USER_AGENT'];
$userIp = $_SERVER['REMOTE_ADDR'];
$serverName = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo1</title>
    </head>
    <body>
        <div class="background">
            <h1 class="text">PHP partie 8 - Exo 1 :</h1>
        </div>
        <div class="background">User Agent:</div><p><?= $serverUser; ?></p><br />
        <div class="background">Adresse IP:</div><p><?= $userIp; ?></p><br />
        <div class="background">Nom du serveur:</div><p><?= $serverName; ?></p><br />
    </body>
</html>