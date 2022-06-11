<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="data"> </div>
</body>
</html>

<script>
fun(x){
            jQuery.ajax(
                {
                    url:"qualitycontrol_promotion_sql.php",
                    data:
                    {
                        id:x,                    },
                    type:"post",
                    success:function(data)
                    {
                       
                    }
                }
reload();
            );

        } 

function reload()
{
    document.getElementById("data").innerHTML="

<?php include "qualitycontrol_navbar.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_web_project";

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM `users` WHERE users.U_Type=3";
$result = mysqli_query($conn,$query);


echo'  <table class="table table-hover">';
echo'<tr>';
	
    echo'<th>'.'User ID'.'</th>';
	echo'<th>'.'Name'.'</th>';
    echo'<th>'.' Email'.'</th>';
    echo'<th>'.'Promotion'.'</th>';
echo'</tr>';

while($row = mysqli_fetch_array($result)) 
{

echo'<tr>';
	
	echo'<td>'. $row['U_ID'].'</td>';
	echo'<td>'. $row['FN']. '</td>';	
    echo'<td>'. $row['Email']. '</td>';

    echo '<td> <button type="button" id="'.$row['U_ID'].'"  onclick="fun(this.id)">promote</button> </td>';
    echo '</tr>';
}
echo'</table>';
?>";
}
reload();
    
</script>




        <!-- <form action ="qualitycontrol_promotion_sql.php" method="post">';
    echo '<input type="submit" class="btn btn-info" value="Promote" >';
    echo '<input type="hidden" name="id" value="'.$row['U_ID'].'"></td>';
    echo '</form> -->