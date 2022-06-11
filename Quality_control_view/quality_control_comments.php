<?php include 'database.php';?>

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>
<?php 
include "qualitycontrol_navbar.php";


$conn = mysqli_connect($server, $user, $pass, $db );
$query = "SELECT items.I_ID,items.Name,items.Description,items.img FROM items,comments WHERE comments.I_ID=items.I_ID GROUP BY comments.comment";
$result = mysqli_query($conn,$query);
?>

<html>
<table class="table table-hover">
<tr>
	<th>Item name</th>
  <th>Description</th>
	<th>image</th>
	<th>Comments</th>
</tr>

<?php
while($row = mysqli_fetch_array($result)) 
{


echo'<tr>';
	
	  echo'<td>'. $row['Name'].'</td>';
	  echo'<td>'. $row['Description']. '</td>';	
    echo'<td>'.'<img src="/'.$row['img'].'" class="img-thumbnail"  alt=" image" width="300" height="300">'.'</td>';
    echo '<td> <form action ="qualitycontrol_comments_sql.php" method="post">';
    echo '<input type="submit" class="btn btn-info" value="view" >';
    echo '<input type="hidden" name="id" value="'.$row['I_ID'].'"></td>';
    echo '</form> </td>';
    echo '</tr>';
}
?>

</table>

</html>
