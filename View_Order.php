<?php session_start() ?>
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
$sql = "SELECT * FROM `order` WHERE O_ID=$_POST[ID]";
$res = $conn->query($sql);
if (!$res) {
    echo "errorz";
} else {


    while ($rez = mysqli_fetch_array($res)) {
        $sql2 = "SELECT * FROM`order_items` WHERE O_ID=$rez[O_ID]";

        $res2 = $conn->query($sql2);
        if (mysqli_num_rows($res2) > 0) {
            echo "<caption><h2>Previously Ordered</h2></caption>";
            echo "<table class=table table-hover>";

            echo "
                <thead>
                    <th>Order_ID</th>
                    <th>Order_Items</th>
                    <th>Price</th>
                    <th>OrderType</th>
                    <th>Date</th>
                    <th>PaymentMethod</th>
            
                </thead>";

            echo "<tbody>";
            echo "<tr>";
            echo "<td>$rez[O_ID]</td>";
            echo "<td></td>";
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
            echo "</tr>";
            while ($rez2 = mysqli_fetch_array($res2)) {
                echo "<tr>";
                echo "<td></td>";
                $sql3 = "SELECT * FROM `items`WHERE I_ID=$rez2[I_ID]";
                $res4 = $conn->query($sql3);
                $rez3 = mysqli_fetch_array($res4);

                echo "<td>$rez3[Name]</td>";
                echo "<td>$rez3[Price]</td>";
                echo "<td></td>";
                echo "<td></td>";
            }
            echo "</tbody>";
        }

        echo "</table>";
    }
}

$sql0 = "SELECT * FROM `order` where O_ID=$_POST[ID]";
$res0 = $conn->query($sql0);

while ($rez0 = mysqli_fetch_array($res0)) {
    $sql = "SELECT * FROM sandwich_order WHERE O_ID=$rez0[O_ID]";
    $res = $conn->query($sql);
    if (mysqli_num_rows($res) > 0) {
        echo "<caption><h2>Previously Created Sandwich</h2></caption>";
        echo "<table class=table table-hover>
        <thead>
        <th>Sandwich_Item</th>
        <th>Protien</th>
        <th>Cheese</th>
        <th>Toppings</th>
        <th>Sauces</th>
        <th></th>
        </thead>";
        echo "<tbody>";
        while ($rez = mysqli_fetch_array($res)) {
            $sql2 = "SELECT * FROM sandwich_order_details WHERE SO_ID=$rez[SO_ID]";
            $res2 = $conn->query($sql2);
            while ($rez2 = mysqli_fetch_array($res2)) {
                $sql3 = "SELECT * FROM sandwich_items WHERE ID=$rez2[S_item]";
                $res3 = $conn->query($sql3);
                while ($rez3 = mysqli_fetch_array($res3)) {
                    echo "<td>$rez3[Name]</td>";
                }
            }
        }

        echo "</tbody>";
    }



    echo "</table>";
}

?>