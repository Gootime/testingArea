<?php
include('../include/db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>testingArea</title>
        <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
    </head>
    <body>
      Déja un compte ? cliquez <a href="logIn.php">ici</a><br>
       <i>Tous les champs marqués d'une * sont obligatoire</i>
        <form action="action.php" method="post" class="formSignIn">
            <h2><u>Information de Connexion</u></h2><br>
            
            <label for="pseuso">Pseudo</label>&nbsp;&nbsp;*<br>
            <input type="text" autofocus name="pseudo" id="pseudo" value="<?php if(isset($_POST['pseudo'])){ echo $_POST['pseudo'];}?>" required><br><br>
            
            <label for="pseuso">Adresse Email</label>&nbsp;&nbsp;*<br>
            <input type="mail"  name="email" id="email"  value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" required><br><br>
            
            <label for="pseuso">Mot de Passe</label>&nbsp;&nbsp;*<br>
            <input type="password"  name="passwordA" id="passwordA"  value="<?php if(isset($_POST['passwordA'])){ echo $_POST['passwordA'];}?>" required><br><br>
            
            <label for="pseuso">Confirmer le Mot de Passe</label>&nbsp;&nbsp;*<br>
            <input type="password"  name="passwordB" id="passwordB"  value="<?php if(isset($_POST['passwordB'])){ echo $_POST['passwordB'];}?>" required><br><br>
            
            <h2><u>Informations Personnelles</u></h2><br>
            
            <label for="sex">Sexe</label>&nbsp;&nbsp;*<br>
            <input type="radio" name="sex" value="Masculin" id="sex_male" checked> Homme&nbsp;&nbsp;
            <input type="radio" name="sex" value="Féminin" id="sex_female"> Femme<br><br>
            
            <label for="lastname">Nom de Famille</label>&nbsp;&nbsp;*<br>
            <input type="text" name="lastname" id="lastName" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname'];}?>" required><br><br>
            
            <label for="firstname">Prénom</label>&nbsp;&nbsp;*<br>
            <input type="text" name="firstname" id="firstName" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname'];}?>" required><br><br>
            
            <label for="birthday">Date de Naissance</label>&nbsp;&nbsp;*<br>
            <input type="date" name="birthday" id="birthday" value="<?php if(isset($_POST['birthday'])){ echo $_POST['birthday'];}?>" required><br><br>
            
            <label for="streetnumber">Numéro de Rue</label>&nbsp;&nbsp;*<br>
            <input type="text" name="streetnumber" id="streetNumber" value="<?php if(isset($_POST['streetnumber'])){ echo $_POST['streetnumber'];}?>" required><br><br>
            
            <label for="streetname">Nom de Rue</label>&nbsp;&nbsp;*<br>
            <input type="text" name="streetname" id="streetname" value="<?php if(isset($_POST['streetname'])){ echo $_POST['streetname'];}?>" required><br><br>
            
            <label for="zip">Code Postal</label>&nbsp;&nbsp;*<br>
            <input type="text" name="zip" id="zip" value="<?php if(isset($_POST['zip'])){ echo $_POST['zip'];}?>" required><br><br>
            
            <label for="city">Ville</label>&nbsp;&nbsp;*<br>
            <input type="text" name="city" id="city" value="<?php if(isset($_POST['city'])){ echo $_POST['city'];}?>" required><br><br>
            
            <label for="phrase">Phrase d'accroche</label><br>
            <textarea name="phrase" id="phrase" value="<?php if(isset($_POST['phrase'])){ echo $_POST['phrase'];}?>" style="resize:none;"></textarea><br><br>
            
            <label for="phonenumber">Numéro de Téléphone'</label>&nbsp;&nbsp;*<br>
            <input type="text" name="phonenumber" id="phonenumber" value="<?php if(isset($_POST['phonenumber'])){ echo $_POST['phonenumber'];}?>" required><br><br>
            
            <input type="submit" value="Envoyer" id="send">
        </form>
    </body>
</html>