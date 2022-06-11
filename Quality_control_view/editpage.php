<html>

<body>


<?php

$conn = new mysqli("localhost","root","","restaurant_web_project");

if ($conn->connect_error) die ("Fatal connection error");

//echo "Connection ok <br>";


$query = "select I_ID,Name,Description,Price,img,I_Type from items where I_ID =".$_POST['I_ID']; //preparation

$result = $conn->query($query);

if (!$result) die ("Fatal Query error");

//echo "Query ok <br>";

$rows = $result->num_rows;


	
	$row = $result->fetch_array(MYSQLI_ASSOC);

?>

<form method="POST" action="update.php">
<input type="hidden" name="I_ID" value="<?php echo $row['I_ID'];  ?>" ><br>
<input type="text" name="Name" value="<?php echo $row['Name'];  ?>"><br>
<input type="text" name="Description" value="<?php echo $row['Description'];  ?>"><br>
<input type="text" name="Price" value="<?php echo $row['Price'];  ?>"><br>
<input type="text" name="img" value="<?php echo $row['img'];  ?>"><br>
<input type="text" name="I_Type" value="<?php echo $row['I_Type'];  ?>"><br>
<input type=submit value="save changes"><br>
</form>

</body>


</html>
