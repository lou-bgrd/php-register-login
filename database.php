<?php

$host = 'localhost';
$usernameDB = 'root';
$passwordDB = '';
$dbname = 'database_users';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernameDB, $passwordDB);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
