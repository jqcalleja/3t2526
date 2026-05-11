<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Basic Array</title>
</head>
<body>
    <?php 
    $bands = array(
        "Five Finger Death Punch",
        "Trivium",
        "Skillet",
        "Dragon Force",
        "System of a Down",
        214
    );
    ?>

    <div>
        <pre>
            <?php print_r($bands); ?>
        </pre>
    </div>

    <div>
        <pre>
            <?php var_dump($bands); ?>
        </pre>
    </div>
</body>
</html>