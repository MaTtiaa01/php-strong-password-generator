<?php

include __DIR__ . '/partials/functions.php';


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