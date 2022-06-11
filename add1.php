<?php include 'database.php';?>
<?php 
include "qualitycontrol_navbar.php";?>

<html>
    <body>
        <?php
       $conn = mysqli_connect($server, $user, $pass, $db );

        if ($conn->connect_error) die ("Fatal connection error");
        $query = "select ID,I_Type,description,image from item_types"; //preparation

        $result = $conn->query($query);

        if (!$result) die ("Fatal Query error");

        //echo "Query ok <br>";

        $rows = $result->num_rows;


        ?>
        <form method="post" action="submit.php" enctype="multipart/form-data"  onsubmit="return check()">
            Name:        <input type="text" name="Name" id="Name"><br>
            Description: <input type="text" name="Description" id="Description"><br>
            price:       <input type="text" name="Price" id="Price"><br>
            image:       <input type="file" name="img" size="25" id="img" ><br>
            type:
            <select name="type" size="1" id="type">
                <?php
                for ($j=0; $j < $rows; $j++) {
	
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    echo '<option value="'.$row['ID'].'">'.$row['I_Type'].'</option>'; 
                
                }
                ?>
            
}
                <!-- <option value="Choose">Choose</option> -->
                <!-- <option value="Appetizers">Appetizers</option> -->
                <!-- <option value="Beef">Beef</option> -->
                <!-- <option value="Chicken">Chicken</option> -->
                <!-- <option value="Desserts">Desserts</option> -->
                <!-- <option value="Drinks">Drinks</option> -->
                <!-- <option value="Kids">Kids</option> -->
                <!-- <option value="Pasta">Pasta</option> -->
                <!-- <option value="Pizza">Pizza</option> -->
                <!-- <option value="Salads">Salads</option> -->
                <!-- <option value="Sandwiches">Sandwiches</option> -->
                <!-- <option value="Seafood">Seafood</option> -->
                <!-- <option value="Soups">Soups</option> -->
            </select><br>
            <input type="submit" value="upload">
        </form>
    </body>

    <script>
        function check()
        {
            if(document.getElementById("Name").value=="")
            {
                alert("Name is empty");
                return false;
            }
            if(document.getElementById("Description").value=="")
            {
                alert("Description is empty");
                return false;
            }
            if(document.getElementById("Price").value=="")
            {
                alert("Price is empty");
                return false;
            }
            if(document.getElementById("img").value=="")
            {
                alert("img is empty");
                return false;
            }
            if(document.getElementById("type").value=="Choose")
            {
                alert("choose is empty");
                return false;
            }
            return true;
        }
    </script>
</html>