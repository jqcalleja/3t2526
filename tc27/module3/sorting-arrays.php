<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Sorting Array</title>
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
    <div>
        <h2>Original Order:</h2>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div>
        <h2>Using sort():</h2>
        <?php sort($bands); ?>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>


    <?php 
    $bands = array(
        "A" => "Five Finger Death Punch",
        1 => "Trivium",
        "B" => "Skillet",
        "C" => "Dragon Force",
        "D" => "System of a Down",
    );
    ?>
    <div>
        <h2>Using rsort():</h2>
        <?php rsort($bands); ?>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php 
    $bands = array(
        "A" => "Five Finger Death Punch",
        1 => "Trivium",
        "B" => "Skillet",
        "C" => "Dragon Force",
        "D" => "System of a Down",
    );
    ?>
    <div>
        <h2>Using asort():</h2>
        <?php asort($bands); ?>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php 
    $bands = array(
        "A" => "Five Finger Death Punch",
        1 => "Trivium",
        "B" => "Skillet",
        "C" => "Dragon Force",
        "D" => "System of a Down",
    );
    ?>
    <div>
        <h2>Using arsort():</h2>
        <?php arsort($bands); ?>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php 
    $bands = array(
        "A" => "Five Finger Death Punch",
        1 => "Trivium",
        "B" => "Skillet",
        "C" => "Dragon Force",
        "D" => "System of a Down",
    );
    ?>
    <div>
        <h2>Using ksort():</h2>
        <?php ksort($bands); ?>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php 
    $bands = array(
        "A" => "Five Finger Death Punch",
        1 => "Trivium",
        "B" => "Skillet",
        "C" => "Dragon Force",
        "D" => "System of a Down",
    );
    ?>
    <div>
        <h2>Using krsort():</h2>
        <?php krsort($bands); ?>
        <ul>
            <?php foreach($bands as $key => $band): ?>
            <li><?= $key . ": " . $band; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>