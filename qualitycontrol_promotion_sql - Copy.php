<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>

<?php
include "qualitycontrol_navbar.php";
$id=$_POST['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_web_project";

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "UPDATE users SET users.U_Type = 2 WHERE users.U_ID= $id ";
$result = mysqli_query($conn,$query);

?>