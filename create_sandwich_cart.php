<?php
session_start();

$sandwich_items=array();
$sandwich_items=$_POST['data'];


$test="";
for($i=0;$i<count($sandwich_items);$i++) {
    $test.=$sandwich_items[$i];
}
// echo $test;


    if(!isset($_SESSION['sandwichcart']))
    {
        $_SESSION['sandwichcart']=array();
        $_SESSION['sandwichcounter']=0;
    }
    $Counter=$_SESSION['sandwichcounter'];
    $_SESSION['sandwichcart'][$Counter]=array(
        'sandwichitems'=>$test,
        'Quantity'=>1
    );
    $_SESSION['sandwichcounter']=$_SESSION['sandwichcounter']+1;

    // echo "<script>alert('".."')</script>";
?>
