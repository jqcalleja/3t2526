<?php
session_start();

if(isset($_POST['submit'])) {
    if($_POST['email'] == 'admin@test.com' && $_POST['password'] == 'password') {
        // Declare session data
        $_SESSION['islogged'] = true;
        $_SESSION['fullname'] = 'Joseph Calleja'; // FROM DATABASE

        header('Location: index.php'); // Redirects to index.php
        exit();
    }

    $_SESSION['error'] = "Email and/or password is incorrect...";
    header('Location: login.php'); 
}
?>