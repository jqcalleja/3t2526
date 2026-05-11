<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Using Associative Array</title>
</head>
<body>
    <?php 
    $bands = array(
        "A" => "Five Finger Death Punch",
        1 => "Trivium",
        "B" => "Skillet",
        "C" => "Dragon Force",
        "D" => "System of a Down",
    );
    ?>
    <h2>Accessing individual value</h2>
    <p><?= $bands['C'] ?></p>

    <div>
        <h2>My Favorite Bands</h2>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>