<?php
session_start();
?>
<?php 
include 'database.php';
?>
<?php
$conn = mysqli_connect($server, $user, $pass, $db );
    if($conn->connect_error) die("fatal error");

    $query ="SELECT * FROM `sandwich_types`";
    


    $result=$conn->query($query);

    while($row=mysqli_fetch_array($result))
    {
        $query2="SELECT sandwich_items.ID, sandwich_items.Name, 
        sandwich_items.price, sandwich_items.img, 
        sandwich_items.Type, sandwich_types.Type AS TypeName 
        FROM `sandwich_items`,sandwich_types 
        WHERE sandwich_items.Type=".$row['ID']." AND 
        sandwich_types.ID=sandwich_items.Type;";
        $result2=$conn->query($query2);


        if($row['ID']==$_POST['breadid'])
            echo "<div id='sandwichtype".$row['ID']."' >";
        else
            echo "<div  id='sandwichtype".$row['ID']."'  style='display: none;'>";

        echo "<h3>".$row['Type']."</h3>";
        while($row2=mysqli_fetch_array($result2))
        {
            if($row['ID']==$_POST['breadid'])
            {
                // echo '<input type="radio" id="'.$row2['img'].'" name="'.$row2['TypeName'].'" value="'.$row2['Name'].'" onclick="additem(this)">';
                echo '<input type="radio" id="'.$row2['img'].'" name="'.$row2['TypeName'].'" value="'.$row2['ID'].','.$row2['Name'].','.$row2['price'].'_" onclick="additem(this)">';

            }
            else
                echo '<input type="checkbox" id="'.$row2['img'].'" name="'.$row2['TypeName'].'" value="'.$row2['ID'].','.$row2['Name'].','.$row2['price'].'_" onclick="additem(this)">';
            echo '<label for="'.$row2['img'].'"><b>'.$row2['Name'].':</b><i> $'.$row2['price'].'</i></label><br>';
        }
        echo "</div>";
    }
    $conn->close();
?>
