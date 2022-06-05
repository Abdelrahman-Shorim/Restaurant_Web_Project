<?php include "qualitycontrol_navbar.php";?>
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
$query = "SELECT items.I_ID,items.Name,items.Description, AVG(rate.rate) FROM items,rate WHERE rate.I_ID=items.I_ID GROUP BY Name";
$result = mysqli_query($conn,$query);


echo'<table class="table table-bordered">';
echo'<tr>';
	
    echo'<th>'.'Name'.'</th>';
	echo'<th>'.'Description'.'</th>';
	echo'<th>'.'Average Rate'.'</th>';
    echo'<th>'.'view by ID'.'</th>';
echo'</tr>';

while($row = mysqli_fetch_array($result)) 
{

echo'<tr>';
	
	echo'<td>'. $row['Name'].'</td>';
	echo'<td>'. $row['Description']. '</td>';	
    echo'<td>'. $row['AVG(rate.rate)'].'</td>';

    echo '<td> <form action ="qualitycontrol_rating_sql.php" method="post">';
    echo '<input type="submit" value="view" >';
    echo '<input type="hidden" name="id" value="'.$row['I_ID'].'"></td>';
    echo '</form> </td>';
    echo '</tr>';
}


echo'</table>';





//    echo'<td>'.'<a href="rating_sql.php"><input type="button" value="'.$row['I_ID'].'"> </a>';

?>

