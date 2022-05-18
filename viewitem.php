
<html>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant_web_project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) die("fatal Error");

    $query2= "SELECT * FROM items  WHERE items.I_ID=".$_POST['itemid'];
    $result=$conn->query($query2);
    if(!$result) die("fatal Error");

    $result2=mysqli_fetch_array($result);
    echo '<div>';
    echo '<div>';
    echo'<label id ="'. $result2["I_ID"].'">' .'<br>' . $result2["Name"]. '<br>'. '<img src="/'.$result2["img"].'" width="300" height="300"> <br>' . $result2["Description"] .'<br>' . $result2["Price"] .'<br>'.'</label>';
    
    echo '<form action="menu.php" method="post">'; //for back button
    echo '<input type="submit" value="back">';
    echo '<input type="hidden" name="itemtypeid" value="'.$result2["I_Type"].'">';
    echo '</form>';

    echo "<button onclick='minus_quantity()' >-</button><span name='quantity' id='quantity'>1</span><button onclick='plus_quantity()'>+</button>  <input form='addtocartform' type='submit' value='add to cart'>";

    echo '<form id="addtocartform" action="menu.php" method="post" onsubmit="return addtocart()">';
    // echo '<input type="submit" value="add to cart">';
    // echo " <input type='submit' value='add to cart'>";
    echo '<input type="hidden" name="itemtypeid" value="'.$result2["I_Type"].'">';
    echo '</form>';
    
    echo "</div>";  
    echo "</div>";
    mysqli_close($conn);
    ?>

    <script>
        function plus_quantity(){
            x=document.getElementById("quantity").textContent;
            document.getElementById("quantity").innerHTML=++x;
        }
        function minus_quantity(){
            x=document.getElementById("quantity").textContent;
            if(x==1)
            alert("can't decrease because quantity is at it's minimum");
            else
            {
                document.getElementById("quantity").innerHTML=--x;
            }
        }

        function addtocart(){
            alert("hi");
            return false;
        }

    </script>
</html>