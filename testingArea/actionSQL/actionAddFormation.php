<?php
include('../include/db.php');
$countFormationBis = $_GET['form'];
// on insère une formation dans la database
for($m = 1; $m <= $countFormationBis; $m++){
    $periode = array($_POST['periodeForm1_'.$m],$_POST['periodeForm2_'.$m]);
    $var_prefix_form = 'sqlInsertFormation';
    $var_name_form = $var_prefix_form . $m;
    $var_nameBis_form = 'INSERT INTO formation SET titreFormation = "'.$_POST['titreForm_'.$m].'", periodeFormation ="'.$periode[0]." au ".$periode[1].'", villeFormation = "'.$_POST['villeForm_'.$m].'", id_user_form_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'")';
    $requestInsertForm = $pdo->query($var_nameBis_form);
    
}
header('Location:../formuliare/cvLoisir.php');
