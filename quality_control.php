<?php 
include "qualitycontrol_navbar.php";
?>

<style>
table, th, td {
  border: 1px solid black;
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_web_project";

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT users.FN,items.Name,comments.comment FROM comments,users,items WHERE comments.U_ID=users.U_ID AND comments.I_ID=items.I_ID";
$result = mysqli_query($conn,$query);
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<table class="table table-hover">
<tr>
	<th>user name</th>
    <th>Item name</th>
	<th>Comments </th>
</tr>

<?php
while($row = mysqli_fetch_array($result)) 
{
?>

<tr>
	<td><?= $row['FN']; ?></td>
	<td><?= $row['Name']; ?></td>
	<td><?= $row['comment']; ?></td>	 
</tr>

<?php
}
?>

</table>

</html>
