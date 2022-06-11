<?php include 'database.php';?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="data">
    <?php 
    include "qualitycontrol_navbar.php";



$conn = mysqli_connect($server, $user, $pass, $db );
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

echo '<tr>';
    
    echo '<td>'. $row['U_ID'].'</td>';
    echo '<td>'. $row['FN']. '</td>';	
    echo '<td>'. $row['Email']. '</td>';

    echo '<td> <button class="btn btn-info" type="button" id="'.$row['U_ID'].'"  onclick="promote(this.id)">promote</button> </td>';
    echo '</tr>';
}
echo '</table>';
?>
    </div>

    
    <script>
        function promote(x)
        {
            alert("promoted");
            jQuery.ajax(
                {
                    url:"qualitycontrol_promotion_sql.php",
                    type:"POST",
                    data:{
                        id:x
                    }
                    
                }
            );
            location.reload();
        }
    </script>
</body>
</html>


