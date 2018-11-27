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
        <!-- Formulaire utilisant la méthode POST et renvoyant sur cookie.php -->
        <form method="post" action="cookie.php">
          <label for="login"> Login : </label>
          <input type="text" name="login" required/>
          <label for="password"> Mot de passe : </label>
          <input type="password" name="password" required/>
          <input type="submit" value="Envoyer !" />
        </form>
        <!-- Input renvoyant sur le formulaire de modification -->
        <a href="formcookie.php"><input value="Modifier" /></a>
    </body>
</html>