<?php

include __DIR__ . '/partials/functions.php';



$password = '';
if (isset($_GET['length']) && is_numeric($_GET['length'])) {
    if (!isset($_GET['true']) && !isset($_GET['false'])) {
        $password = 'choose yes or no';
    } elseif (isset($_GET['true'])) {
        $password = generatePassword($_GET['length'], $_GET['true']);
    } elseif (!isset($_GET['true'])) {
        $true = '.';
        $password = generatePassword($_GET['length'], $true);
    }
} else {
    echo 'Type a number';
}
var_dump($password);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>password generator</title>
</head>

<body>

    <div class="container p-4 text-center">
        <header>
            <h1 class="text-uppercase my-2">Password generetor</h1>
        </header>
        <main>
            <form action="index.php" method="get">
                <div>
                    <label for="length">Lunghezza Password</label>
                    <input type="text" name="length" id="length" placeholder="Type a number">
                </div>

                <div>Dare la possibilità di ripetere i caratteri</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="true" id="true">
                    <label class="form-check-label" for="true">
                        si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="false" id="false">
                    <label class="form-check-label" for="false">
                        no
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="symbols" id="symbols">
                    <label class="form-check-label" for="symbols">
                        Simboli
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="letter" id="letter" checked>
                    <label class="form-check-label" for="letter">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="numbers" id="numbers" checked>
                    <label class="form-check-label" for="numbers">
                        Numeri
                    </label>
                </div>

                <button class="btn btn-sm btn-primary" type="submit">Generate Password</button>
                <button class="btn btn-sm btn-danger" type="reset">Reset</button>

            </form>
            <h2><?php echo $password ?> </h2>
        </main>

    </div>

</body>

</html>