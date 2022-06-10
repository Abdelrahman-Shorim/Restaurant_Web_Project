<?php include "qualitycontrol_navbar.php";?>
<style>
table, th, td {
  border: 1px solid black;
}
</style>


<?php
$id=$_POST['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_web_project";

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT users.U_ID,users.FN,users.LN,items.Name,items.Description, rate.rate FROM items,rate ,users WHERE rate.I_ID=items.I_ID AND items.I_ID=$id AND users.U_ID=rate.U_ID";
$result = mysqli_query($conn,$query);

echo'<table class="table table-bordered">';
echo'<tr>';
	echo'<th>'.'U_ID'.'</th>';
    echo'<th>'.'first Name'.'</th>';
	echo'<th>'.'Last name'.'</th>';
	echo'<th>'.'Item'.'</th>';
	echo'<th>'.'Description'.'</th>';
	echo'<th>'.'rate'.'</th>';
echo'</tr>';

while($row = mysqli_fetch_array($result)) 
{

echo'<tr>';
	echo'<td>'.$row['U_ID'].'</td>';
	echo'<td>'. $row['FN'].'</td>';
	echo'<td>'. $row['LN']. '</td>';	
    echo'<td>'.$row['Name'].'</td>';
	echo'<td>'.$row['Description'].'</td>';
    echo'<td>'.$row['rate'].'</td>';

echo'</tr>';
}


echo'</table>';

?>