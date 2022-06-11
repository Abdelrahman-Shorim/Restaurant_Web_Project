<?php 
session_start();
?>

<?php 
for($z=0;$z<$_SESSION['sandwichcounter'];$z++)
{
    $total=0;
    $text1=explode("_",$_SESSION['sandwichcart'][$z]['sandwichitems']);

    for($s=0;$s<count($text1)-1;$s++) // to calculate total price
    {
        $text2=explode(",",$text1[$s]);
        $total=$total+$text2[2];
    }
    $_SESSION['sum']=$_SESSION['sum']+$total;


    if($z==$_POST['id'])
    {
        echo "<tr>
        <td>Sandwich ".($z+1)."</td> 
        <td></td>
        <td>".$total." L.E</td>

        <td>"."<input type='number' min='1' max='50' id='sandwichquantity' value=".$_SESSION['sandwichcart'][$z]['Quantity']." onKeyDown='return false'></input>"."</td>
        
        <td>".($total*$_SESSION['sandwichcart'][$z]['Quantity'])."</td>
        <td><button name='".$z."'onclick=donesandwich(this.name) class='button btn btn-primary'>Done</button></td>
        <td><button name='".$z."' onclick='removesandwich(this.name)'class='btn btn-danger'>Remove</button></td>
        </tr>";
    }
    else {
        echo "<tr>
        <td>Sandwich ".($z+1)."</td> 
        <td></td>
        <td>".$total." L.E</td>
        <td>".$_SESSION['sandwichcart'][$z]['Quantity']."</td>      
        <td>".($total*$_SESSION['sandwichcart'][$z]['Quantity'])."</td>
        <td><button name='".$z."'onclick=editsandwich(this.name) class='button btn btn-primary'>Edit</button></td>
        <td><button name='".$z."' onclick='removesandwich(this.name)'class='btn btn-danger'>Remove</button></td>
        </tr>";
    }

    for($s=0;$s<count($text1)-1;$s++)
    {
        $text2=explode(",",$text1[$s]);
        echo "<tr>
        <td></td>
        <td>". $text2[1]. "</td> 
        <td>".  $text2[2].' L.E'."</td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
    }
}

?>
