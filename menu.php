<?php 
session_start();
    // echo "<script>alert('quantity: ".$_POST['quantity']."')</script>";
  
?>
<html>
    <a href="batee5.php">click</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script>
        function getitems(x)
        {
            jQuery.ajax(
                {
                    url:"typeitems.php",
                    data:'id='+x,
                   type:"POST",
                   success:function(data)
                   {
                        $("#itemsdata").html(data);
                   }
               }
           );
        }
    </script>

<?php
    // to get item types 
    $conn = new mysqli("localhost", "root", "", "restaurant_web_project");
    if($conn->connect_error) die("fatal Error");

    $query="SELECT * FROM item_types";
    $result=$conn->query($query);
    if(!$result) die("fatal Error");

    echo '<div class="sidenav" >';
    while($result2=mysqli_fetch_array($result))
    {
        echo'<label id ="'. $result2["ID"].'" onclick="getitems(this.id)">' .  $result2["I_Type"] . '</label>'.'<br>';
    }
    echo '</div>';
    mysqli_close($conn);
    ?>
    

<div id="itemsdata"> <!-- check law fe item type ama ydoos back mel view item -->
    <?php
        if(isset($_POST['itemtypeid'])) {
            echo '<script>getitems('.$_POST['itemtypeid'].')</script>';
        }
    ?>
</div>
<div id="cart">
<hr>
<?php
if(isset($_SESSION['counter'])) {
    for($i=0;$i<$_SESSION['counter'];$i++)
    {
        echo $i."  ";
        echo $_SESSION['cart'][$i]['ID']." ";
        echo $_SESSION['cart'][$i]['Name']." ";
        echo $_SESSION['cart'][$i]['Quantity']." ";
        echo $_SESSION['cart'][$i]['Price']." ";
        $q= $_SESSION['cart'][$i]['Price'];
        echo $q*$_SESSION['cart'][$i]['Quantity'];
        echo "<br>";
    }
}
?>

</div>
<!-- //<php  -->
<!-- // echo $_SESSION['cart'][0]['ID'];
?> -->


</html>
