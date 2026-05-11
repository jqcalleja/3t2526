<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Sorting Arrays</title>
</head>
<body>
    <div>
        <?php
            $values = array(
                "Name" => "Joseph",
                "Age" => 23,
                11 => 78.9,
                "Address" => "San Mateo, Rizal",
                9 => 123
            );
        ?>
        <h3>Original Values:</h3>
        <?php
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>

        <h3>Sort array using sort():</h3>
        <?php
            sort($values);
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>

        <?php
            $values = array(
                "Name" => "Joseph",
                "Age" => 23,
                11 => 78.9,
                "Address" => "San Mateo, Rizal",
                9 => 123
            );
        ?>
        <h3>Sort array using rsort():</h3>
        <?php
            rsort($values);
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>

        <?php
            $values = array(
                "Name" => "Joseph",
                "Age" => 23,
                11 => 78.9,
                "Address" => "San Mateo, Rizal",
                9 => 123
            );
        ?>
        <h3>Sort array using asort():</h3>
        <?php
            asort($values);
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>

        <?php
            $values = array(
                "Name" => "Joseph",
                "Age" => 23,
                11 => 78.9,
                "Address" => "San Mateo, Rizal",
                9 => 123
            );
        ?>
        <h3>Sort array using arsort():</h3>
        <?php
            arsort($values);
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>

        <?php
            $values = array(
                "Name" => "Joseph",
                "Age" => 23,
                11 => 78.9,
                "Address" => "San Mateo, Rizal",
                9 => 123
            );
        ?>
        <h3>Sort array using ksort():</h3>
        <?php
            ksort($values);
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>

        <?php
            $values = array(
                "Name" => "Joseph",
                "Age" => 23,
                11 => 78.9,
                "Address" => "San Mateo, Rizal",
                9 => 123
            );
        ?>
        <h3>Sort array using krsort():</h3>
        <?php
            krsort($values);
            foreach($values as $key => $val):
                echo $key . " => " . $val . "<br>";
            endforeach;
        ?>
    </div>
</body>
</html>