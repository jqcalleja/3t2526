<?php
session_start();
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
        <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="col col-md-5">
                <form action="checkuser.php" method="post" novalidate>
                    <h2 class="mb-5">Log In</h2>
                    <?php
                    if (isset($_SESSION['error'])):
                    ?>
                        <div class="alert alert-danger">
                            <p><?= $_SESSION['error'] ?></p>
                        </div>
                    <?php
                        unset($_SESSION['error']);
                    endif;
                    ?>
                    <?php
                    if (isset($_SESSION['success'])):
                    ?>
                        <div class="alert alert-success">
                            <p><?= $_SESSION['success'] ?></p>
                        </div>
                    <?php
                        unset($_SESSION['success']);
                    endif;
                    ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary px-5 py-3">Log In</button>
                        </div>
                        <div>
                            <p>No account yet?: <a href="signup.php">Click here</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>