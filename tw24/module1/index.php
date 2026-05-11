<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Projects</title>

    <style>
        * {
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1><?php echo "Hello, PHP!"; ?></h1>
    <?php
        $var = "Joseph Calleja";
    ?>
    <h3><?= "All files are coded by $var"; ?></h3>
    <div>
        <p><?= 'All files are\n coded by $var'; ?></p>
        <p><?= "All files are coded by " . $var; ?></p>
    </div>
    
    <div>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>
        <?php $var = 12; ?>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>
        <?php $var = (float)12; ?>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>
        <?php settype($var, "string"); ?>
        <p><?= 'Data type of $var: ' . gettype($var) ?></p>
    </div>
</body>
</html>