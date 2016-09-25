<?php
include('../include/db.php');
$countUpdateExperience = $_GET['expUpdate'];
$postUpdate0 = $_GET['postUpdate0'];
$postUpdate1 = $_GET['postUpdate1'];
$postUpdate2 = $_GET['postUpdate2'];
$postUpdate3 = $_GET['postUpdate3'];
$postUpdate4 = $_GET['postUpdate4'];

echo $postUpdate0."<br>".$postUpdate1."<br>".$postUpdate2."<br>".$postUpdate3."<br>".$postUpdate4."<br>";

$sql0 = 'UPDATE experience SET titre="'.$_POST['titre_1'].'",ville="'.$_POST['ville_1'].'",periode="'.$_POST['periode_1'].'" WHERE id_user_fk = (SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") AND idExperience = "'.$postUpdate0.'"';

$sql1 = 'UPDATE experience SET titre="'.$_POST['titre_1'].'",ville="'.$_POST['ville_1'].'",periode="'.$_POST['periode_1'].'" WHERE id_user_fk = (SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") AND idExperience = "'.$postUpdate1.'"';

$sql2 = 'UPDATE experience SET titre="'.$_POST['titre_2'].'",ville="'.$_POST['ville_2'].'",periode="'.$_POST['periode_2'].'" WHERE id_user_fk = (SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") AND idExperience = "'.$postUpdate2.'"';

$sql3 = 'UPDATE experience SET titre="'.$_POST['titre_3'].'",ville="'.$_POST['ville_3'].'",periode="'.$_POST['periode_3'].'" WHERE id_user_fk = (SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") AND idExperience = "'.$postUpdate3.'"';

$sql4 = 'UPDATE experience SET titre="'.$_POST['titre_4'].'",ville="'.$_POST['ville_4'].'",periode="'.$_POST['periode_4'].'" WHERE id_user_fk = (SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") AND idExperience = "'.$postUpdate4.'"';

$sqlRequest0 = $pdo->query($sql0);
$sqlRequest1 = $pdo->query($sql1);
$sqlRequest2 = $pdo->query($sql2);
$sqlRequest3 = $pdo->query($sql3);
$sqlRequest4 = $pdo->query($sql4);

header('Location:../formulaire/index.php');
?>