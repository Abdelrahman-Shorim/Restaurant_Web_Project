<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
        // session_start();
        // if(!isset($_SESSION['cart']))
        // {
        //     $_SESSION['cart']=array();
        //     $_SESSION['counter']=0;
        // }
        // if(isset($_POST['itemname'])) {
        //     // if(array_key_exists($_POST['itemname'],$_POST['quantity'])){

        //     // }
        //     // else{

        //     // }
        //     echo "<script>alert('".$_POST['quantity']."');</script>";
        //     // unset($_POST['itemname']);
        //     // echo "<script>getitems(".$_POST['itemtypeid'].")</script>";
        //     // echo $_POST['itemname'];
        // }
    ?>
    
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
</html>