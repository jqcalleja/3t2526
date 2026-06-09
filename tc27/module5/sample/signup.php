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
                <form action="checkdata.php" method="post" novalidate>
                    <h2 class="mb-5">Log In</h2>
                    <?php
                    if (isset($_SESSION['errors'])):
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach ($_SESSION['errors'] as $error):
                            ?>

                                <p><?= $error ?></p>

                            <?php
                            endforeach;
                            ?>
                        </div>
                    <?php
                        unset($_SESSION['errors']);
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
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary px-5 py-3">Sign Up</button>
                        </div>
                        <div>
                            <p><a href="signup.php">Back to Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>