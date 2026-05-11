<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Using print_r() and var_dump()</title>
</head>
<body>
    <div>
        <?php
        $values = array(
            "Name" => "Joseph Q. Calleja",
            "Age" => 28,
            5 => 87.9,
            "Address" => "San Mateo, Rizal",
            1 => 88.66
        );
        ?>
        <h3>Original values in the array:</h3>
        <p>
            <?php
            foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
            }
            ?>
        </p>
        <h3>Sort the array using sort():</h3>
        <?php
        sort($values);
        foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
        }
        ?>

        <?php
        $values = array(
            "Name" => "Joseph Q. Calleja",
            "Age" => 28,
            5 => 87.9,
            "Address" => "San Mateo, Rizal",
            1 => 88.66
        );
        ?>
        <h3>Sort the array using rsort():</h3>
        <?php
        rsort($values);
        foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
        }
        ?>

        <?php
        $values = array(
            "Name" => "Joseph Q. Calleja",
            "Age" => 28,
            5 => 87.9,
            "Address" => "San Mateo, Rizal",
            1 => 88.66
        );
        ?>
        <h3>Sort the array using asort():</h3>
        <?php
        asort($values);
        foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
        }
        ?>

        <?php
        $values = array(
            "Name" => "Joseph Q. Calleja",
            "Age" => 28,
            5 => 87.9,
            "Address" => "San Mateo, Rizal",
            1 => 88.66
        );
        ?>
        <h3>Sort the array using arsort():</h3>
        <?php
        arsort($values);
        foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
        }
        ?>

        <?php
        $values = array(
            "Name" => "Joseph Q. Calleja",
            "Age" => 28,
            5 => 87.9,
            "Address" => "San Mateo, Rizal",
            1 => 88.66
        );
        ?>
        <h3>Sort the array using ksort():</h3>
        <?php
        ksort($values);
        foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
        }
        ?>

        <?php
        $values = array(
            "Name" => "Joseph Q. Calleja",
            "Age" => 28,
            5 => 87.9,
            "Address" => "San Mateo, Rizal",
            1 => 88.66
        );
        ?>
        <h3>Sort the array using krsort():</h3>
        <?php
        krsort($values);
        foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
        }
        ?>
    </div>
</body>
</html>