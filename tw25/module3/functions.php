<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>User-Defined Functions</title>
</head>
<body>
    <?php
    function add($num1 = 1, $num2 = 2) {
        return $num1 + $num2;
    }

    $name = "Joseph Q. Calleja";
    function display() {
        global $name; // Define that the $name variable is a global variable

        // $address = "San Mateo, Rizal"; // Local

        // To declare a variable to be used as global
        global $address;
        $address = "San Mateo, Rizal";

        return $name;
    }
    ?>
    <div>
        <?= "The sum of 23 and 34 is: " . add(23, 34) . "<br>" ?>
        <?= "The sum of 1 and 2 is: " . add() . "<br>" ?>
        <?= "Hello " . display() . "!<br>" ?>
        <?= "Address: " . $address . "<br>" ?>
    </div>
</body>
</html>