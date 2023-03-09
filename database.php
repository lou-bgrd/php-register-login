<?php

$host = 'localhost';
$usernameDB = 'root';
$passwordDB = '';
$dbname = 'database_users';

try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernameDB, $passwordDB);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$createDB = "CREATE DATABASE IF NOT EXISTS " . $dbname . " DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
$pdo->exec($createDB);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
