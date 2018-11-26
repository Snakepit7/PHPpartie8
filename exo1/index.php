<?php
$getUser = $_SERVER['HTTP_USER_AGENT'];
$getIp = $_SERVER['REMOTE_ADDR'];
$getServerName = $_SERVER['HTTP_HOST'];
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
      <div class="background">User Agent:</div><p><?php echo $getUser ?></p><br />
      <div class="background">Adresse IP:</div><p><?php echo $getIp ?></p><br />
      <div class="background">Nom du serveur:</div><p><?php echo $getServerName ?></p><br />
  </body>
</html>