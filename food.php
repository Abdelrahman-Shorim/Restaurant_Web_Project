<?php include 'database.php';?>
<html>

<?php
    
    $conn = mysqli_connect($server, $user, $pass, $db );
    if($conn->connect_error) die("fatal Error");

    $query="SELECT * FROM item_types";
    $result=$conn->query($query);
    if(!$result) die("fatal Error");

    echo '<div >';
    while($result2=mysqli_fetch_array($result))
    {
        echo'<label id ="'. $result2["ID"].'" onclick="reload(this)">' .  $result2["I_Type"] . '</label>'.'<br>';
    }
    echo '</div>';
   
    if($_GET)
    {
        $query2= "SELECT * FROM items , item_types WHERE item_types.ID=items.I_Type AND items.I_Type=".$_GET['id'];
        $result=$conn->query($query2);
        if(!$result) die("fatal Error");


        // Restaurant_Web_Project\Menu_images\Beef\Beef Fillet Three Sauces.jpg


        echo '<div>';
        while($result2=mysqli_fetch_array($result))
        { 
            echo '<div id ="'. $result2["I_ID"].'">';
            echo'<label id ="'. $result2["I_ID"].'">' . '<img src="/'.$result2["img"].'" width="300" height="300">'.'<br>' . $result2["Name"]. '<br>' . $result2["Description"] .'<br>' . $result2["Price"] .'<br>'.'</label>';
            echo "<a href='req.php?id=".$result2["I_ID"]."'><input type='button' value='view' onclick='idfun(this)'> </a>";
            // echo "<a href=''><input type='button' value='view' onclick='idfun(this)'> </a><br><br><br><br>";
            echo "</div>";  
        }
        echo "</div>";
    }
    mysqli_close($conn);
   ?>

<script>
   function idfun(x)
   {
        alert(x.parentNode.parentNode.id) ;
   }
</script>

<script>
   function reload(x)
   {
        location.replace("food.php?id="+x.id);
   }
</script>
</html>