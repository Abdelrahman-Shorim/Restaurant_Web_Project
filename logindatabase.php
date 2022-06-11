<?php include 'database.php';?>
<?php
session_start();
$conn = mysqli_connect($server, $user, $pass, $db );
if(!$conn){
die ("Connection failed" . mysqli_connect_error());
}


?>
