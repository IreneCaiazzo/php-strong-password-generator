<?php

$length = isset($_GET['length']) ? $_GET['length'] : '';

function create_pw($length)
{
    $arr_alph_num = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?$?%^&*()_-+={[}]:;@#|\<,>.?/';
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= $arr_alph_num[rand(0, strlen($arr_alph_num) - 1)];
    }

    return $password;
}

$password = create_pw($length);
echo "Password Generata: " . $password;


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

        <form class="row g-3 mt-3" action="" method="GET">
            <input class="form-control" type="number" placeholder="Scrivi qui il numero" aria-label="default input example" name="length">
            <button type="submit" class="btn btn-primary col-1 mb-3 me-3">Invia</button>
            <button type="reset" class="btn btn-secondary col-1 mb-3">Cancella</button>
        </form>

    </div>

</body>

</html>