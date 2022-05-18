<?php
session_start();
?>
<?php
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
    $_SESSION['counter']=0;

    $Counter=$_SESSION['counter'];
    $_SESSION['cart'][$Counter]=array(
        'Quantity'=>$_POST['quantity'],
        'ID'=>$_POST['id'],
        'Name'=>$_POST['name'],
        'Price'=>$_POST['price']);
                           $_SESSION['counter']=$_SESSION['counter']+1;
 }
 else{   $Counter=$_SESSION['counter'];
    $_SESSION['cart'][$Counter]=array(
        'Quantity'=>$_POST['quantity'],
        'ID'=>$_POST['id'],
        'Name'=>$_POST['name'],
        'Price'=>$_POST['price']);
                           $_SESSION['counter']=$_SESSION['counter']+1;
    }
?>