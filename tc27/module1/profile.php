<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #d3d3d3;
        }

        .container {
            text-align: center;
        }

        .header {
            font-weight: bolder;
            text-shadow: 2px 2px 5px rgb(100, 100, 100, 0.5);
        }

        .motto {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
        $name = "Joseph Q. Calleja";
        $fave_motto = "The greatest lie of a man is when they say they are OK!";
    ?>
    <!-- div.container>div.header>h1^div.motto>p -->
    <div class="container">
        <div class="header">
            <h1><?= $name; ?></h1>
        </div>
        <div class="motto">
            <p><?= $fave_motto; ?></p>
        </div>
    </div>
</body>
</html>