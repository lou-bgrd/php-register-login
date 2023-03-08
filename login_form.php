<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/c277378f56.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php include_once('header.php') ?>

    <div class="d-flex justify-content-center align-content-center ">

        <form class="d-flex justify-content-center flex-column gap-4 align-items-end" action="login.php" method="post">
            <div>
                <h2>Connectez-vous</h2>
            </div>
            <div>
                <label for="Username"">Nom d'utilisateur :</label>
                <input class="form-control " type=" text" name="Username">
            </div>
            <div>
                <label for="Password">Mot de passe :</label>
                <input  class="form-control "type="text" name="Password">
            </div>
            <input class="btn btn-secondary align-self-center" type="submit">
    </div>
</body>

</html>