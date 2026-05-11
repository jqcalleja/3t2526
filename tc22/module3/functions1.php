<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Using Functions</title>
</head>
<body>
    <?php
    function add($num1 = 1, $num2 = 2) {
        return $num1 + $num2;
    }
    ?>

    <p>The sum of 12 and 23 is: <?= add(12, 23) ?></p>
    <p>The sum of 1 and 2 is: <?= add() ?></p>
</body>
</html>