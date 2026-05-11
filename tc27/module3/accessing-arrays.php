<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Accessing Array Values</title>
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
    <h2>Accessing individual value</h2>
    <p><?= $bands[4] ?></p>
    <!-- div>h2+ul>li -->
    <div>
        <h2>My Favorite Bands</h2>
        <ul>
            <?php foreach($bands as $band): ?>
            <li><?= $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

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