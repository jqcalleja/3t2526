<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Variable Scope</title>
</head>
<body>
    <?php
        $name = "Joseph Calleja";
        function display() {
            global $name;
            $str = "This is from inside the function.";
            $str = $str . "<br>Hello, " . $name;
            return $str;
        }

        function view_address() {
            global $address;
            $address = "San Mateo, Rizal";
        }
        view_address();
    ?>

    <h3><?= display(); ?></h3>
    <h3><?= $address; ?></h3>
</body>