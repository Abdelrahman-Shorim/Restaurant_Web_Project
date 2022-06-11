<?php
session_start();
?>
<html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    //Including apis of google library 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    //Including cloudflare library
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
    //Including bootstrapccdn library
</script>

</html>
<?php
$conn = new mysqli("localhost", "root", "", "restaurant_web_project");
$sql = "SELECT * FROM `order` WHERE U_ID=$_SESSION[ID]";
$res = $conn->query($sql);


while ($rez = mysqli_fetch_array($res)) {
    echo "<table class=table table-hover>";
    echo "
    <thead>
        <th>Order_ID</th>
        <th>Price</th>
        <th>OrderType</th>
        <th>Date</th>
        <th>PaymentMethod</th>

    </thead>";
    $sql2 = "SELECT * FROM`order_items` WHERE O_ID=$rez[O_ID]";
    $res2 = $conn->query($sql2);
    echo "<tbody>";
    echo "<tr>";
    echo "<td>$rez[O_ID]</td>";

    echo "<td>$rez[Total_Price]</td>";
    if ($rez['Pickup_Type'] == 1)
        echo "<td>On-site</td>";
    else
        echo "<td>PickUp</td>";

    echo "<td>$rez[Date]</td>";
    if ($rez['Payment_Method'] == 1) {
        echo "<td>Cash</td>";
    } else {
        echo "<td>Visa</td>";
    }

    echo "<td>  <form action='View_Order.php' method=post>
<input type=hidden name=ID value=$rez[O_ID]>
<input type=submit value='View Order' class = 'btn btn-primary'>
</form></td>";
    echo "</tr>";
}
echo "</table>";
?>