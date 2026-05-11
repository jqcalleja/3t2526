<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Activities</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1><?php echo "Hello, PHP. This is TC22."; ?></h1>
    <h3><?= "All files here are developed by Joseph Calleja" ?></h3>

    <?php
        $name = "Joseph Calleja";
        $birthyear = 2000;
    ?>

    <div>
        <p>Data type of $birthyear: <?= gettype($birthyear) ?></p>
        <p><?= "I am $name" ?></p>
        <p><?= 'I was born \nin the year $birthyear' ?></p>
    </div>

    <?php
        $birthyear = "2000"
    ?>
    <p>Data type of $birthyear: <?= gettype($birthyear) ?></p>
</body>
</html>