<?php
    $name = "Joseph Calleja";
    $logged = true;

    
    setcookie("name", $name, time()+10);
    setcookie("logged", $logged, time()+10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Cookies</title>
</head>
<body>
    <h2>NAME: <?= $_COOKIE['name'] ?></h2>
    <h3>Logged?: <?= $_COOKIE['logged'] ?></h3>
</body>
</html>