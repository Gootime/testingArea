<?php
try {
    $dsn = 'mysql:host=localhost;dbname=cvmaker';
	$user = 'root';
	$pass = '';
	$pdo = new PDO($dsn, $user, $pass);
    session_start();
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
?>