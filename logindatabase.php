<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "restaurant_web_project";

$conn = mysqli_connect($server, $user, $pass, $db );
if(!$conn){
die ("Connection failed" . mysqli_connect_error());
}


?>
