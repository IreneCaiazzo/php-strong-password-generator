<?php

include_once __DIR__ . '/functions.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>

    <div class="container">

        <h1>Scrivi da quanti caratteri vuoi che sia composta la tua password e premi invia</h1>

        <form class="row g-3 mt-3" action="" method="GET" novalidate>
            <input class="form-control" type="number" placeholder="Scrivi qui il numero" aria-label="default input example" name="length">
            <button type="submit" class="btn btn-primary col-1 mb-3 me-3">Invia</button>
            <button type="reset" class="btn btn-secondary col-1 mb-3">Cancella</button>
        </form>

        <div class="mt-3">
            <h2>Password Generata:</h2>
            <p><?= $password; ?></p>
        </div>

    </div>

</body>

</html>