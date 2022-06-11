<?php include 'database.php';?>
<?php include "qualitycontrol_navbar.php"; ?>
<html>

<body>

<table class="table table-hover">

<tr>

    <th>Item ID</th>
	<th>Name</th>
	<th>Description</th>
	<th>Price</th>
    <th>Image</th>
    <th>Item Type</th>
	

</tr>
<?php

$conn = new mysqli("localhost","root","","restaurant_web_project");

if ($conn->connect_error) die ("Fatal connection error");

//echo "Connection ok <br>";


$query = "delete from items WHERE `items`.`I_ID` = 2;"; //preparation

$result = $conn->query($query);

if (!$result) die ("Fatal Query error");

//echo "Query ok <br>";




?>

</table>
</body>


</html>