<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Arrays</title>
</head>
<body>
    <?php
    $values = array(
        "Name" => "Joseph Calleja",
        "Age" => 25,
        1 => 89.7,
        "Address" => "San Mateo, Rizal",
        5 => 66.66
    );
    ?>
    <h3>Using print_r()</h3>
    <pre>
<?php print_r($values) ?>
    </pre>

    <h3>Using var_dump()</h3>
    <pre>
<?php var_dump($values) ?>
    </pre>

        <h3>Using foreach()</h3>
        <?php
        foreach($values as $key => $val):
            echo $key . " => " . $val . "<br>";
        endforeach;
        ?>
</body>
</html>