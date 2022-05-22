<?php

session_start();
unset($_SESSION["userId"]);
unset($_SESSION["userName"]);
$_SESSION["userType"]="userType";
// unset($_SESSION['shopping_cart']);
header("Location:http://localhost/HOD/user/login.php");

?>