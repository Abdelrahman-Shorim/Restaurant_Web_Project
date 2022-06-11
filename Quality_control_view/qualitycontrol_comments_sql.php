<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>
<?php include "qualitycontrol_navbar.php";

$id=$_POST['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_web_project";

$conn = new mysqli($servername, $username, $password, $dbname);
$query ="SELECT users.U_ID,users.FN,users.LN,items.Name,comments.comment FROM comments,users,items WHERE comments.U_ID=users.U_ID AND comments.I_ID=items.I_ID And items.I_ID=$id";
$result = mysqli_query($conn,$query);

echo'<table class="table table-hover">';
echo'<tr>';
    echo'<th>'.'first Name'.'</th>';
	  echo'<th>'.'Last name'.'</th>';
	  echo'<th>'.'comment'.'</th>';
    echo'</tr>';

while($row = mysqli_fetch_array($result)) 
{

echo'<tr>';
	echo'<td>'.$row['FN'].'</td>';
	echo'<td>'. $row['LN']. '</td>';	
  echo'<td>'.$row['comment'].'</td>';


echo'</tr>';
}


echo'</table>';

?>