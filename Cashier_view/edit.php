<?php 
session_start();
?>

<?php 
for($i=0;$i<$_SESSION['counter'];$i++)

{ 
    if($i==$_POST['id']){
        
                $q=$_SESSION['cart'][$i]['Price'];
            echo "<tr>
            <td>". $_SESSION['cart'][$i]['Name']. "</td> 
            <td>". $_SESSION['cart'][$i]['Price'].' L.E'."</td>
            <td>"."<input type='number' min='1' max='50' id='quantity' value=".$_SESSION['cart'][$i]['Quantity']." onKeyDown='return false'></input>"."</td>
            <td>". $q*$_SESSION['cart'][$i]['Quantity'].' L.E'."</td>
            <td><button id='$i'onclick=done(this.id) class='btn btn-primary'>Done</button></td>
            <td><button id='$i' onclick='remove(this.id)' class='btn btn-danger'>Remove</button></td>
            </tr>";// printing out the searched values that we found matching in the database in a table
          
        

    }
    else{
    $q=$_SESSION['cart'][$i]['Price'];
    echo "<tr>
    <td>". $_SESSION['cart'][$i]['Name']. "</td> 
    <td>". $_SESSION['cart'][$i]['Price'].' L.E'."</td>
    <td>".$_SESSION['cart'][$i]['Quantity']."</td>
    <td>". $q*$_SESSION['cart'][$i]['Quantity'].' L.E'."</td>
    <td><button id='$i'onclick=edit(this.id) class='btn btn-primary'>Edit</button></td>
    <td><button id='$i' onclick='remove(this.id)'class='btn btn-danger'>Remove</button></td>
    </tr>";// printing out the searched values that we found matching in the database in a table
    }
}


?>
