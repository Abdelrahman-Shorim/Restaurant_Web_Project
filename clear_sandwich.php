<?php
session_start();
// session_destroy();
unset($_SESSION['sandwichcart'][$_POST['id']]); 
$_SESSION["sandwichcart"] = array_values($_SESSION["sandwichcart"]);
$_SESSION['sandwichcounter']-=1;
?>