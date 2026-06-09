<?php
session_start();

$errors = array();

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if(!checkemail($email)){
        $errors[] = "Email is not valid...";
    }
    if(!checkpassword($password)){
        $errors[] = "Password must be 8 characters long...";
    }
    if(!checkconfirmpassword($password, $confirmpassword)){
        $errors[] = "Passwords does not match...";
    }

    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        header('Location: signup.php');
    } else {
        // SAVE DATA TO THE DATABASE
        $_SESSION['success'] = "Signup successful, you may now login...";
        header('Location: login.php');
    }
}

function checkemail($email) {
    $pattern = "/^[a-zA-Z]+[a-zA-Z0-9\._]*@[a-zA-Z0-9\._]+\.[a-zA-Z]{2,8}$/";
    if(!preg_match($pattern, $email)) {
        return false;
    }

    return true;
}

function checkpassword($password) {
    if(strlen($password) < 8) {
        return false;
    }
    return true;
}

function checkconfirmpassword($password, $confirmpassword) {
    if($confirmpassword != $password) {
        return false;
    }
    return true;
}
?>