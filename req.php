
<html>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant_web_project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) die("fatal Error");

    $query2= "SELECT * FROM items  WHERE items.I_ID=".$_GET['id'];
        $result=$conn->query($query2);
        if(!$result) die("fatal Error");

        echo '<div>';
        while($result2=mysqli_fetch_array($result))
        { 
            echo '<div id ="'. $result2["I_ID"].'">';
            echo'<label id ="'. $result2["I_ID"].'">' . '<img src="/'.$result2["img"].'" width="300" height="300">'.'<br>' . $result2["Name"]. '<br>' . $result2["Description"] .'<br>' . $result2["Price"] .'<br>'.'</label>';
            echo "<a href='food.php'><input type='button' value='back' onclick='idfun(this)'> </a>";
            echo "</div>";  
        }
        echo "</div>";
    mysqli_close($conn);

    ?>
</html>