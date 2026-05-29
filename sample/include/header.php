<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css\style.css">

    <title><?= $title; ?></title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="banner">
                <h1><?= $banner; ?></h1>
                <p>This is the header area</p>
            </div>
            <nav class="navigation">
                <ul>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="page1.php">
                        <li>Page 1</li>
                    </a>
                    <a href="page2.php">
                        <li>Page 2</li>
                    </a>
                </ul>
            </nav>
        </header>
        <main class="main-content">