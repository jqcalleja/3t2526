<?php
session_start();
if(!isset($_SESSION['islogged'])){
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Super Global Variables</title>
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <h1>Welcome back, </h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse debitis animi ad beatae, sed hic itaque voluptate et rem architecto reprehenderit quia maxime, ipsam nulla nesciunt impedit ullam illo. Iusto.</p>
            <div>
                <a href="logout.php">Log Out</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>