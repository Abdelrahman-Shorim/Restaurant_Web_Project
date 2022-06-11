<?php 
session_start();
for($i=0;$i<$_SESSION['counter'];$i++)
    unset($_SESSION['cart'][$i]); 
$_SESSION["cart"] = array_values($_SESSION["cart"]);
$_SESSION['counter']=0;

?>

