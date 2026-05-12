<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="child banner">
                <h1>Using PHP Pre-Defined Functions</h1>
                <p>This is a sample page to demonstrate pre-defined functions.</p>
                <p><?= date("F j, Y") ?></p>
            </div>
            
            <?php include('navigation.php'); ?>
        </header>