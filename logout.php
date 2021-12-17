<?php
session_start();
unset($_SESSION['Student ID']);
unset($_SESSION['Fname']);
unset($_SESSION['Lname']);
unset($_SESSION['Addr']);
unset($_SESSION['Email']);

session_destroy();

header("Location: login.php");
exit;
?>
