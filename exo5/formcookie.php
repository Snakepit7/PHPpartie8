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
        <!-- Formulaire de modification -->
        <form method="post" action="traitementcookie.php">
            <h1>Modifications:</h1>
            <label for="login"> Login : </label>
            <!-- Changement du name pour la modification -->
            <input type="text" name="loginmod" required/>
            <label for="password"> Mot de passe : </label>
            <!-- Changement du name pour la modification -->
            <input type="password" name="passwordmod" required/>
            <input type="submit" value="Envoyer !" />
        </form>
    </body>
</html>