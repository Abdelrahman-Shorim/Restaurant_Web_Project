<?php 
session_start();
?>
<?php 
// $_SESSION['cart'][$_POST['id']]['Quantity']=$_POST['quantity'];
$_SESSION['sandwichcart'][$_POST['id']]['Quantity']=$_POST['quantity'];
?>