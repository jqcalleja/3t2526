<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Codes</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="h1">
        <h1><?php echo "Hello, PHP!"; ?></h1>
    </div>

    <div>
        <p><?= "This is developed by Joseph" ?></p>
    </div>

    <div>
        <?php
            $var = "FEU Tech";
        ?>
        <p><?= "Value of\n 'var': $var" ?></p>
        <p><?= 'Value of\n var: $var' ?></p>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>

        <?php
            $var = 1234;
        ?>
        <p><?= "Value of 'var': " . $var ?></p>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>

        <?php
            $var = (float)1234;
        ?>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>

        <?php
            settype($var, "string");
        ?>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>
    </div>
</body>
</html>