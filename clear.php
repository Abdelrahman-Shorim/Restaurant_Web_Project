<?php
session_start();
// session_destroy();
unset($_SESSION['cart'][$_POST['id']]); 
$_SESSION["cart"] = array_values($_SESSION["cart"]);
$_SESSION['counter']-=1;
?>