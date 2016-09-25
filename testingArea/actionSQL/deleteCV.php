<?php
    include('../include/db.php');
    $sqlDeleteExp = 'DELETE FROM experience WHERE id_user_fk = "'.$_SESSION['id'].'"';
    $sqlRequestExp = $pdo->query($sqlDeleteExp);

    $sqlDeleteForm = 'DELETE FROM formation WHERE id_user_form_fk = "'.$_SESSION['id'].'"';
    $sqlRequestForm = $pdo->query($sqlDeleteForm);

    $sqlDeleteLoisir = 'DELETE FROM loisir WHERE id_user_loisir_fk = "'.$_SESSION['id'].'"';
    $sqlRequestLoisir = $pdo->query($sqlDeleteLoisir);

    $sqlUpdateDelete = 'UPDATE users SET cvCount = 0 WHERE pseudo="'.$_SESSION['pseudo'].'"';
    $sqlRequestUpdate = $pdo->query($sqlUpdateDelete);

    header('Location:index.php');
?>