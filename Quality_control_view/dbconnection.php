<?php include 'database.php';?>
<?php include "qualitycontrol_navbar.php";?>

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>

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
	<th>Edit</th>
	<th>Delete</th>

</tr>
<?php

$conn = mysqli_connect($server, $user, $pass, $db );

if ($conn->connect_error) die ("Fatal connection error");

//echo "Connection ok <br>";


$query = "select I_ID,Name,Description,Price,img,I_Type from items  "; //preparation

$result = $conn->query($query);

if (!$result) die ("Fatal Query error");

//echo "Query ok <br>";

$rows = $result->num_rows;

for ($j=0; $j < $rows; $j++) {
	
	$row = $result->fetch_array(MYSQLI_ASSOC);
	echo "<tr><td> ".$row['I_ID']."</td> <td> ".$row['Name']."</td><td>".$row['Description']." </td><td>".$row['Price']."</td><td>".$row['img']."</td><td>".$row['I_Type']."</td>";
	
    echo "<td>";
    echo '<form action="editpage.php" method="post">';
    echo '<input type="hidden" name="I_ID" value="'.$row['I_ID'].'">';
    echo '<input type="submit"  class="btn btn-info"  value="edit">';
    echo '</form>';
    echo "<br></td>";
    
    // echo "<td><form method="POST" action="update.php">
    // <input type="hidden" name="I_ID" value="<?php echo $row['I_ID'];  
    // <input type="submit" value="save changes">" ><br></td>";
	echo "<td><a  href=deletepage.php?id=".$row['I_ID']. "> Delete</a></td>";	
	echo "</tr>";
	
	}



?>

</table>
</body>


</html>