<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Activities</title>
</head>
<body>
    <h1><?php echo "This are my PHP Activities"; ?></h1>
    <h5><?= "PHP is great!"; ?></h5>

    <?php
        $var = 1234;
        echo $var . "<br>";

        $var = "Joseph";
        echo $var . "<br>";

        echo "Hi, I'm $var.<br>";
        echo 'Hi, I\'m $var.<br>';

        $var = 25;
        echo "I am " . $var . " years old.<br>";

        echo gettype($var) . "<br>";
        $var = (string)25; // Casting operator
        echo gettype($var) . "<br>";
        settype($var, "boolean"); // function to convert to another data type
        echo gettype($var) . "<br>";
    ?>
</body>
</html>