<?php
include('../include/db.php');
unset($_SESSION['pseudo']);
session_destroy();
header('Location:index.php');
?>