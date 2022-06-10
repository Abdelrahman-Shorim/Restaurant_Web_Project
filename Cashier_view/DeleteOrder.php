<?php
session_start();
?>

<head>
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
</head>
<table class="table table-hover">
    <thead>
        <th>Order_ID</th>
        <th>Name of user or cashier</th>
        <th>DATE</th>
        <th>OrderType</th>
        <th>Price</th>
        <th>PaymentMethod</th>

    </thead>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant_web_project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM `order` ";
    $result = $conn->query($sql);

    if (!$result) {
        echo "error";
    } else {
        echo "<tbody>";
        if (mysqli_num_rows($result) > 0) {
            while ($result2 = mysqli_fetch_array($result)) {
                $userorder = "SELECT* FROM users WHERE U_ID='$result2[U_ID]' ";
                $result3 = $conn->query($userorder);
                if (!$result3) echo "errorhere";
                $name = mysqli_fetch_array($result3);
                if ($result2['Pickup_Type'] == 1) {
                    $order_Type = "On-site";
                } else
                    $order_Type = "take-away";
                if ($result2['Payment_Method'] == 1) {
                    $payment = "cash";
                } else {
                    $payment = "visa";
                }
                echo "<tr>
<td>" . $result2['O_ID'] . "</td>

<td>" . $name['FN'] . "</td>
<td>" . $result2['Date'] . "</td>
<td>" . $order_Type . "</td> 
<td>" . $result2['Total_Price'] . "</td>
<td>" . $payment . "</td>
<td><button id='$result2[O_ID]' onclick=deletez(this.id) class='button btn btn-danger'>DELETE</button></td>
</tr>";
            }
            echo "</tbody>";
        } else {
            echo "<h2>There is no orders yet</h2>";
        }
    }
    ?>
</table>
<hr>
<p style="display:none" id="Confirm"></p>
<script>
    function deletez(x) {

        jQuery.ajax({
            url: "Confirming.php",
            data: {
                O_ID: x
            },
            type: "POST",
            success: function(data) {
                $("#Confirm").html(data);
                showing();

            }

        });

    }

    function showing() {
        $("#Confirm").slideDown("slow", "linear");
    }

    function confirm(x) {
        if ($("#PIN").val() == "123") {
            jQuery.ajax({
                url: "Delete.php",
                data: {
                    O_ID: x
                },
                type: "post",
                success: function() {
                    location.reload();
                }
            });
        } else {
            alert("wrong Mannger PIN!!");
        }
    }
</script>