<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Functions</title>
</head>
<body>
    <?php 
    $nums = array(
        12, 23, 34, 45, 56, 67
    );

    function add_values($values = array()) {
        $sum = 0;
        foreach($values as $value) {
            $sum = $sum + $value;
        }
        return $sum;
    }
    ?>

    <!-- div>h3{Adding all values in an array:}+p -->
    <div>
        <h3>Adding all values in an array:</h3>
        <p><?= "The sum of the values is: " . add_values($nums); ?></p>
    </div>
</body>
</html>