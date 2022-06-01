<?php 
session_start();
?>
<?php 
$_SESSION['cart'][$_POST['id']]['Quantity']=$_POST['quantity'];
?>