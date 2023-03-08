<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/form.css" />
    <script src="https://kit.fontawesome.com/c277378f56.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <?php include_once('header.php') ?>

    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Vous êtes désormais bien connectés à notre interface.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" name="logout" class="btn btn-lg px-4">
                <a class="text-decoration-none text-dark" href="logout.php">
                    Deconnexion &nbsp;
                    <i class="fa-solid fa-right-to-bracket"></i>
                </a>
            </button>
        </div>
    </div>
</body>

</html>