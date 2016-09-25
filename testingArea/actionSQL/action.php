<?php 
include('../include/db.php');



if(isset($_POST)){
    // On vérifie si l'utilsateur n'est pas déja inscrit
    $sqlVerif = 'SELECT pseudo FROM users WHERE pseudo ="'.$_POST['pseudo'].'"';
    $requestVerif = $pdo->query($sqlVerif);
    $resultVerif = $requestVerif->fetchAll();
    $countVerif = count($resultVerif);
    if($countVerif > 0){
        header('Location:../formulaire/logIn.php');
    }
    else{
        $sexe = mysql_real_escape_string($_POST['sex']);
        $birthdate = $_POST['birthday'];
          if(is_string($_POST['pseudo']) && strlen($_POST['pseudo']) <= 15){
                $pseudo = mysql_real_escape_string($_POST['pseudo']);
          } 
            else{
                header('Location:../formulaire/formulaire.php');
            }
        
         if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['email']) && is_string($_POST['email'])) {
                $email = mysql_real_escape_string($_POST['email']);
            } 
            else {
                header('Location:../formulaire/formulaire.php');
            }
        
         if(is_string($_POST['passwordA']) && is_string($_POST['passwordB']) && $_POST['passwordA'] === $_POST['passwordB']){
              $password = md5($_POST['passwordA']);
          } 
            else{
                header('Location:../formulaire/formulaire.php');
            }
        
        if(is_string($_POST['lastname']) && strlen($_POST['lastname']) <= 50 && is_string($_POST['firstname']) && strlen($_POST['firstname']) <= 50){
            $lastname = mysql_real_escape_string($_POST['lastname']);
            $firstname = mysql_real_escape_string($_POST['firstname']);
        }
        else{
                header('Location:../formulaire/formulaire.php');
            }
        
        if(is_numeric($_POST['streetnumber']) && is_string($_POST['streetname']) && is_numeric($_POST['zip']) && is_string($_POST['city'])){
            $streetnumber = mysql_real_escape_string($_POST['streetnumber']);
            $streetname = mysql_real_escape_string($_POST['streetname']);
            $zip = mysql_real_escape_string($_POST['zip']);
            $city = mysql_real_escape_string($_POST['city']);
            $adresse = $streetnumber." ".$streetname." ".$zip." ".$city;
        }
        else{
                header('Location:../formulaire/formulaire.php');
            }
        
        if(is_string($_POST['phrase'])){
            $phrase = mysql_real_escape_string($_POST['phrase']);
        }
        else{
             header('Location:../formulaire/formulaire.php');
        }
        
        if(is_numeric($_POST['phonenumber'])){
            $phonenumber = mysql_real_escape_string($_POST['phonenumber']);
        }
        else{
             header('Location:../formulaire/formulaire.php');
        }
        
        $sqlInsert = 'INSERT INTO users(pseudo, password, email, sexe, lastname, firstname, birthdate, adress, phrase, phonenumber, dateinscription) VALUES ("'.$pseudo.'","'.$password.'","'.$email.'","'.$sexe.'","'.$lastname.'","'.$firstname.'","'.$birthdate.'","'.$adresse.'","'.$phrase.'","'.$phonenumber.'",NOW())';
        $requestInsert = $pdo->query($sqlInsert);
        header('Location:../index.php');
        
    }
}
else{
    header('Location:../formulaire/formulaire.php');
}

?>





