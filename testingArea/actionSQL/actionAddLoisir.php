<?php
include('../include/db.php');
$countLoisir = $_GET['loisir'];
// on insère un loisir dans la database
for($i = 1; $i <= $countLoisir; $i++){
    $var_prefix = 'sqlInsertLoisir';
    $var_name = $var_prefix . $i;
    $var_nameBis = 'INSERT INTO loisir SET titreLoisir = "'.$_POST['titreLoisir_'.$i].'",  id_user_loisir_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'")';
    echo  $var_nameBis."<br>";
    $requestInsert = $pdo->query($var_nameBis);  
} 
$sqlUpdateCvCount = 'UPDATE users SET cvCount = 1 WHERE pseudo="'.$_SESSION['pseudo'].'"';
$requestInsertCv = $pdo->query($sqlUpdateCvCount);
header('Location:../result.php');

?>