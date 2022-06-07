<?php
    $conn= mysqli_connect("localhost","root","","restaurant_web_project");
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
        while($row2=mysqli_fetch_array($result2))
        {
            if($row['ID']==$_POST['breadid'])
            {
                echo '<input type="radio" id="'.$row2['img'].'" name="'.$row2['TypeName'].'" value="'.$row2['Name'].'" onclick="additem(this)">';
            }
            else
                echo '<input type="checkbox" id="'.$row2['img'].'" name="'.$row2['TypeName'].'" value="'.$row2['Name'].'" onclick="additem(this)">';
            echo '<label for="'.$row2['img'].'">'.$row2['Name'].'</label><br>';
        }
        echo "</div>";
    }
    $conn->close();
    // $conn= mysqli_connect("localhost","root","","restaurant_web_project");
    // if($conn->connect_error) die("fatal error");

    // $result=$conn->query($query);
    // $active=1;
    // // if($_POST['bread']==$_POST['value'])
    //     echo "<div id='".$_POST['value']."' >";
    // while($row=mysqli_fetch_array($result))
    // {
    //     if($active==$_POST['id'])
    //     {
    //         echo '<input type="radio" id="'.$row['Name'].'" name="'.$row['img'].'" value="'.$row['Name'].'" onclick="additem(this)">';
    //     }
    //     else
    //         echo '<input type="checkbox" id="'.$row['Name'].'" name="'.$row['img'].'" value="'.$row['Name'].'" onclick="additem(this)">';
    //     echo '<label for="'.$row['Name'].'">'.$row['Name'].'</label><br>';
    // }
    // echo "<div>";
    // $conn->close();
?>