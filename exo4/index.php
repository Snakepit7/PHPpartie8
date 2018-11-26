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
        <!-- Création d'un formulaire utilisant la méthode POST et renvoyant vers la page "cookie.php" -->
        <form method="post" action="cookie.php">
          <label for="login"> Login : </label>
          <input type="text" name="login" required/>
          <label for="password"> Mot de passe : </label>
          <input type="password" name="password" required/>
          <input type="submit" value="Envoyer !" />
        </form>
    </body>
</html>