<?php
include('../include/db.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Se Connecter</title>
    </head>
    <body>
       Pas encore de compte ? Par <a href="formulaire/formulaire.php">ici</a><br><br>
        <form action="../actionSQL/actionLog.php" method="post">
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php if(isset($_POST['pseudo'])){ echo $_POST['pseudo'];}?>" required autofocus>
            <input type="password" name="password" id="password" placeholder="Mot de Passe" required> 
            <input type="submit" value="Connexion">
        </form>
    </body>
</html>