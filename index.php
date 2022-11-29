<?php

//Milestone 1
//Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php


function generatePassword($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
};

if (isset($_GET['length']) && is_numeric($_GET['length'])) {
    $password = generatePassword($_GET['length']);
    var_dump($password);
} else {
    echo 'Type a number';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
</head>

<body>

    <div class="container">
        <form action="index.php" method="get">
            <input type="text" name="length" id="length" placeholder="Type a number">
            <button type="submit">Generate Password</button>
        </form>

    </div>

</body>

</html>