<?php
    $conn = new mysqli("localhost", "root", "", "restaurant_web_project");
    $query2= "SELECT * FROM items , item_types WHERE item_types.ID=items.I_Type AND items.I_Type=".$_POST['id'];
    // $query2= "SELECT * FROM items , item_types WHERE item_types.ID=items.I_Type AND items.I_Type=1";
    $result=$conn->query($query2);
    if(!$result) die("fatal Error");

    echo '<div>';
    while($result2=mysqli_fetch_array($result))
    { 
        echo '<div>';
        echo'<label id ="'. $result2["I_ID"].'"  >' .'<br>' . $result2["Name"]. '<br>' . '<br>' . '<img src="/'.$result2["img"].'" width="300" height="300"> <br>' .$result2["Description"] .'<br>' . $result2["Price"] .'<br>'.'</label>';

        echo '<form action="viewitem.php" method="post">';
        echo '<input type="hidden" name="itemid" value="'.$result2["I_ID"].'">';
        echo '<input type="submit" value="order">';
        echo "</form>";
        
        echo "</div>".'<br>'.'<br>';  
    }
    echo "</div>";
    mysqli_close($conn);
?>
<input type="submit">