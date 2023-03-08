<?php


require('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // CHAMPS
    $myUsername = ($_POST["Username"]);
    $email = ($_POST["Email"]);
    $password = ($_POST["Password"]);

    // Series of ifs preventing blanks
    if (empty($myUsername)) {
        die("Veuillez insérer un nom d'utilisateur");
    }
    if (empty($email)) {
        die("Veuillez insérer un email");
    }
    if (empty($password)) {
        die("Veuillez choisir un mdp");
    }

    // Data insertion via SQL command and redirection to the login page
    try {
        $stmt = $pdo->prepare("INSERT IGNORE INTO users (Username, Email, Password) VALUES(?, ?, ?)");
        $stmt->bindParam(1, $myUsername);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $password);
        $stmt->execute();
        echo 'Utilisateur enregistré vous pouvez vous <a href="login_form.php">connecter</a>';
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
