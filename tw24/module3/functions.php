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
    function add($num1 = 1, $num2 = 1){
        return $num1 + $num2;
    }

    $name = "Joseph Calleja";
    function display() {
        global $name;
        echo $name;

        global $address;
        $address = "San Mateo, Rizal";
    }
    ?>

    <div>
        <h3>Calling the add() function</h3>
        <?= "The sum of 23 and 34 is " . add(23, 34) . "<br>" ?>
        <?= "The sum of 1 and 1 is " . add() . "<br>" ?>
    </div>
    <div>
        <h3>Calling the display() function</h3>
        <?php display(); ?>
        <?= $address ?>
    </div>
</body>
</html>