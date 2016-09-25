<?php
include('../include/db.php');
$countExperience = $_GET['exp'];
// on insère une expérience dans la database
for($i = 1; $i <= $countExperience; $i++){
    $periode = array($_POST['periode1_'.$i],$_POST['periode2_'.$i]);
    $var_prefix = 'sqlInsertExperience';
    $var_name = $var_prefix . $i;
    $var_nameBis = 'INSERT INTO experience SET titre = "'.$_POST['titre_'.$i].'", periode ="'.$periode[0]." au ".$periode[1].'", ville = "'.$_POST['ville_'.$i].'", id_user_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'")';
    echo  $var_nameBis."<br>";
    $requestInsert = $pdo->query($var_nameBis);  
} 
header('Location:../formulaire/cvFormation.php');

?>