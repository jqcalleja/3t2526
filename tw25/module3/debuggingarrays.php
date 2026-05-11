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
        $values = array("Joseph Q. Calleja", 28, 87.9, "San Mateo, Rizal");
        ?>
        <h3>Using print_r()</h3>
        <pre>
<?php print_r($values) ?>
        </pre>

        <h3>Using var_dump()</h3>
        <pre>
<?php var_dump($values) ?>
        </pre>
    </div>
</body>
</html>