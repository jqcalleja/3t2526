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
        <?= "Hello, " . $values['Name'] . "!" ?>
        <h3>Values in the array:</h3>
        <p>
            <?php
            foreach($values as $key => $val) {
                echo $key . ": " . $val . "<br>";
            }
            ?>
        </p>
    </div>
</body>
</html>