<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Scope of Variables in Functions</title>
</head>
<body>
    <?php
    $name = "Joseph Calleja";

    function display() {
        global $name;
        echo $name;

        global $address;
        $address = "San Mateo, Rizal";
    }
    ?>

    <p><?php display() ?></p>
    <p><?= $address ?></p>
</body>
</html>