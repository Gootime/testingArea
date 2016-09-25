<?php
include('../include/db.php');
echo $_POST['pseudo']."<br>";
echo md5($_POST['password'])."<br>";
$sqlConnect = 'SELECT id,pseudo, password FROM users WHERE pseudo="'.$_POST['pseudo'].'" AND password="'.md5($_POST['password']).'"';
$requestConnect = $pdo->query($sqlConnect);
$resultConnect = $requestConnect->fetchAll();
$countConnect = count($resultConnect);
if($countConnect == 1){
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['id'] = $resultConnect[0]['id'];
    echo $resultConnect[0]['id'];
    header('Location:../index.php');
}
else{
    header('Location:../formulaire/formulaire.php');
}
?>