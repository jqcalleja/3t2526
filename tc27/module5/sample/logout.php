<?php
unset($_SESSION['islogged']);
unset($_SESSION['fullname']);
session_destroy();
header('Location: login.php');
?>