<?php
session_start();
require('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $myUsername = ($_POST["Username"]);
    $password = ($_POST["Password"]);
    $error_msg = '';

    try {
        $stmt = $pdo->prepare("SELECT Username, Password FROM users WHERE Username = ? AND Password = ?");
        $stmt->execute([$myUsername, $password]);
        $user = $stmt->fetch();


        // Not yet working :
        // if(empty($password) || empty($myUsername)) {
        //     $_SESSION['error_msg'] = '<span>Veuillez remplir les champs</span>';
        // }


        // verifying that the inputed data is correct, (is_array($user) ...) is here because $user has a boolean value.
        if (is_array($user) && $myUsername && $password === $user['Password']) {
            header('location: success.php');
            exit;
        } else {
            echo 'Les informations sont incorrectes';
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
