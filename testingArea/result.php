<?php
include('include/db.php');
$sqlSelectBis = 'SELECT `idExperience`, `id_user_fk`, `titre`, `ville`, `periode` FROM `experience` WHERE id_user_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") ORDER BY idExperience ASC LIMIT 5';
$sqlSelectTer = 'SELECT * FROM formation WHERE id_user_form_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") ORDER BY idFormation ASC LIMIT 5';
$sqlSelectQuad = 'SELECT * FROM `users` WHERE pseudo ="'.$_SESSION['pseudo'].'"';
$sqlSelectQuint = 'SELECT * FROM loisir WHERE id_user_loisir_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'") ORDER BY id ASC LIMIT 5';


$requestSelectBis = $pdo->query($sqlSelectBis);
$requestSelectTer = $pdo->query($sqlSelectTer);
$requestSelectQuad = $pdo->query($sqlSelectQuad);
$requestSelectQuint = $pdo->query($sqlSelectQuint);

$resultSelectBis = $requestSelectBis->fetchAll();
$resultSelectTer = $requestSelectTer->fetchAll();
$resultSelectQuad = $requestSelectQuad->fetch();
$resultSelectQuint = $requestSelectQuint->fetchAll();

$countSelectBis = count($resultSelectBis);
$countSelectTer = count($resultSelectTer);
$countSelectQuad = count($resultSelectQuad);
$countSelectQuint = count($resultSelectQuint);
?>

<h2>Identité de <?=$_SESSION['pseudo'];?></h2>
Nom : <?=$resultSelectQuad['lastname'];?><br>
Prénom : <?=$resultSelectQuad['firstname'];?><br>
Email : <?=$resultSelectQuad['email'];?><br>
Date de Naissance : <?=$resultSelectQuad['birthdate'];?><br>
Sexe : <?=$resultSelectQuad['sexe'];?><br>
Adresse Postale : <?=$resultSelectQuad['adress'];?><br>
Téléphone : +33 <?=$resultSelectQuad['phonenumber'];?><br>
Phrase d'accroche : <?=$resultSelectQuad['phrase'];?><br>

<h2>Tableau des 5 Plus récente Expérience de <?=$_SESSION['pseudo'];?></h2>
<table  border="2">
    <thead>
        <tr>
            <td>ID User</td>
            <td>Intitulé</td>
            <td>Periode</td>
            <td>Ville</td>
        </tr>
    </thead>
    <tbody>
        
<?php
for($j = 0; $j < $countSelectBis; $j++){
    ?>
    <tr>
        <td><?=$resultSelectBis[$j]['id_user_fk'];?></td>
        <td><?=$resultSelectBis[$j]['titre'];?></td>
        <td><?=$resultSelectBis[$j]['periode'];?></td>
        <td><?=$resultSelectBis[$j]['ville'];?></td>
    </tr>
<?php
}
?>
 </tbody>
</table>

<br><br><br>
<?php

?>
<h2>Tableau des 5 Plus récentes Formations de <?=$_SESSION['pseudo'];?></h2>

<table  border="2">
    <thead>
        <tr>
            <td>ID User</td>
            <td>Intitulé</td>
            <td>Periode</td>
            <td>Ville</td>
        </tr>
    </thead>
    <tbody>
        
<?php
for($j = 0; $j < $countSelectTer; $j++){
    ?>
    <tr>
        <td><?=$resultSelectTer[$j]['id_user_form_fk'];?></td>
        <td><?=$resultSelectTer[$j]['titreFormation'];?></td>
        <td><?=$resultSelectTer[$j]['periodeFormation'];?></td>
        <td><?=$resultSelectTer[$j]['villeFormation'];?></td>
    </tr>
<?php
}
?>
 </tbody>
</table>




<br><br><br>
<?php

?>
<h2>Tableau des 5 Loisirs  de <?=$_SESSION['pseudo'];?></h2>

<table border="2">
    <thead>
        <tr>
            <td>ID User</td>
            <td>Intitulé</td>
            <
        </tr>
    </thead>
    <tbody>
        
<?php
for($n = 0; $n < $countSelectQuint; $n++){
    ?>
    <tr>
        <td><?=$resultSelectQuint[$n]['id_user_loisir_fk'];?></td>
        <td><?=$resultSelectQuint[$n]['titreLoisir'];?></td>
        
    </tr>
<?php
}
?>
 </tbody>
</table>
<a href="index.php">index</a>





