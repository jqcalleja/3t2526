<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Using Arrays: Sample 1</title>
</head>
<body>
    <div>
        <p>
            <?php
                $values = array(
                    "Name" => "Joseph",
                    "Age" => 23,
                    11 => 78.9,
                    "Address" => "San Mateo, Rizal"
                );
            ?>
            <pre>
                <?php print_r($values) ?>
            </pre>
            <br>
            <pre>
                <?php var_dump($values) ?>
            </pre>
        </p>

        <div>
            <?php foreach($values as $key => $val): ?>
                <p><?= $key . ": " . $val ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>