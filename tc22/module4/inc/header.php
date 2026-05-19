<?php
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- div.container>header.header>div>h1+p^nav>ul>li*4^^^main>section>p^^footer>p -->
    <div class="container">
        <header class="header">
            <div class="branding">
                <h1><?= $heading; ?></h1>
                <p class="description">This is the demonstration for using pre-defined functions</p>
                <p class="date"><?= date('M d, Y - h:m:s A'); ?></p>
            </div>
            <?php require('inc\navigation.php'); ?>
        </header>