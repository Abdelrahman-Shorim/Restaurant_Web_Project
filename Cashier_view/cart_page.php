<?php 
session_start();
if(!isset($_SESSION['alert']))
{$_SESSION['alert']=0;}

?>
<?php

if(isset(($_POST['submit']))){
   if($_SESSION['alert']!=0)
{
$date=  date("r");


// echo $date;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant_web_project";
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) die("fatal Error");
   $U_iD=$_SESSION['ID'];
   $query="INSERT INTO `order` (`O_ID`, `U_ID`, `Date`, `Pickup_Type`, `Total_Price`, `Payment_Method`) VALUES (NULL,'$U_iD' , '$date'  , $_POST[order], $_SESSION[sum], $_POST[payment])";
    $result=$conn->query($query);
    if(!$result) die("fatal Errors");

for($i=0;$i<$_SESSION['counter'];$i++){
$foodid=$_SESSION['cart'][$i]['ID'];
$quantity=$_SESSION['cart'][$i]['Quantity'];
$sql = "INSERT INTO `order_items`(`OI_ID`, `O_ID`, `I_ID`, `quantity`) VALUES (null,(SELECT `O_ID` FROM `order` ORDER BY `O_ID` DESC LIMIT 1 ),$foodid,$quantity)";
$res=$conn->query($sql);
if(!$res) die("fatal Errors");

}
unset($_SESSION['cart']);
unset($_SESSION['counter']);
unset($_SESSION['alert']);
header("location:menu.php");
}
else{
    $_SESSION['alert']++;
    echo"<script>alert('Check the order with the customer');</script>";
   
}
}


?>

<html>
<head>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">//Including apis of google library </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">//Including cloudflare library</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">//Including bootstrapccdn library</script> 
<!-- <a href="menu.php"><button>Back to Home</button></a> -->
<header>
    
<a href="menu.php" class="logo" style="text-decoration: none;"><i class="fas fa-utensils"></i>Grand Restaurant</a>

</header>
   
</head>

<body>

<br>
<div style="padding-top:75px;">
<?php

if(isset($_SESSION['counter'])&&$_SESSION['counter']!=0) {

echo "<table class='table table-hover'>
    <thead>
    <tr>
    <th>Name</th>
 <th>Price</th>
 <th>Quantity</th>
 <th>Total Price</th>
 <th></th>
 <th></th>
    </tr>
    </thead>
 ";
    echo"<tbody id='cart'>";
    $_SESSION['sum']=0;
    for($i=0;$i<$_SESSION['counter'];$i++)

    {       
        $_SESSION['sum']+=($_SESSION['cart'][$i]['Price']*$_SESSION['cart'][$i]['Quantity']);
         $q=$_SESSION['cart'][$i]['Price'];
        echo "<tr>
        <td>". $_SESSION['cart'][$i]['Name']. "</td> 
        <td>". $_SESSION['cart'][$i]['Price'].' L.E'."</td>
        <td>".$_SESSION['cart'][$i]['Quantity']."</td>
        <td>". $q*$_SESSION['cart'][$i]['Quantity'].' L.E'."</td>
        <td><button id='$i'onclick=edit(this.id) class='button btn btn-primary'>Edit</button></td>
        <td><button id='$i' onclick='remove(this.id)'class='btn btn-danger'>Remove</button></td>
        </tr>";// printing out the searched values that we found matching in the database in a table
      
    }
  
    echo "</tbody>";
echo "</table>";
echo"<hr>";
echo "<h4>Final Price:<br> </h4> <span style = 'font-size: 28px; color:#00203FFF;'> $_SESSION[sum] L.E </span> <br> <br> ";
// echo"<button class='button btn btn-primary>Add more to the cart</button>";
echo"<button class='button btn btn-success' onclick='checkout()'>Procced To Checkout! </button>";

echo"
<a href=menu.php><button class='button btn btn-primary'>Add more to the cart</button></a>";
echo"<button  class='btn btn-danger' onclick=cancel()>Cancel Order</button> ";
}
else{
    echo "cart is empty";
}
?>

</div>
</table>
<form action=""method="POST">

<div id='Details'style='display:none'>
<h4><div onclick="payment()"  class="nav-link dropdown-toggle"> 1 Payment Method</div></h4>
<div id='paymentmethod' style="display:none" class='tab'> 

<input type='radio' name="payment" id='Cash' value='1' required></input>
    <label for='Cash' class="fa fa-money" style="font-size:larger"></label>Cash<br> 
    <input type='radio' name="payment" id='Visa' value='2' ></input>
    <label for='Visa' class="fa fa-credit-card" style="font-size:larger"></label>Credit<br>
</div>
<hr>
<h4><div onclick="Pickup()" class='nav-link dropdown-toggle '>2  Order Status</div></h4>
<div id='pickup' style='display:none' class='tab'>
<input type='radio' name='order' id='OnSite' value='1' required></input>
<label for='onsite' class="fas fa-utensils"></label>On-Site<br>
<input type='radio'name='order' id='TakeAway' value='2'></input>
<label for='takeaway' class='fas fa-shopping-bag'style="font-size:larger"></label>TakeAway<br>
</div>

</div>
<input type='submit' id='sub' name='submit' class="button btn btn-success" hidden>
</form>

</body>


</html>
<script>

       function done(x){
    
      jQuery.ajax({
    url:"done.php",
    data:{id:x,quantity:$('#quantity').val()},
    type:"POST",
    success:function()
    {
location.reload();
    }
});

}

function edit(x){
jQuery.ajax({

url:"edit.php",
data:'id='+x,
type:"POST",
success:function(data)
{
    $("#cart").html(data);
}
});

}
function remove(x){
jQuery.ajax
({
    url:"clear.php",
data:'id='+x,
 type:"POST",
 success:function(data)
{  
      
$("#cart").html(data);
location.reload();
}


});
}
function checkout()
{
$("#Details").slideDown("slow","linear");

}
function payment(){
    $("#paymentmethod").slideToggle("slow");

}
function Pickup(){
    $("#pickup").slideToggle("slow");
}

$("input[name='order']").on("change",function()
{
if($("input[name='order']").is(":checked")==true&&$("input[name='payment']").is(":checked")==true)
{
document.getElementById("sub").removeAttribute("hidden");
}
else{document.getElementById("sub").setAttribute("hidden","");}
})
$("input[name='payment']").on("change",function()
{
if($("input[name='order']").is(":checked")==true&&$("input[name='payment']").is(":checked")==true)
{
document.getElementById("sub").removeAttribute("hidden");
}
else{document.getElementById("sub").setAttribute("hidden","");}
})
function cancel()
{ jQuery.ajax({
url:"cancel.php",

    success:function(){
window.location.replace("http://localhost/restaurant_web_project/Cashier_view/menu.php");
    }
});
}
</script>
<style>
     .tab {
  padding: 5px;
  text-align: left;
  background-color: white;
  border:  1px #c3c3c3;
  font-size: 30px;
  color:#00203FFF;

}
h4{
    color:#00203FFF;;
    font-size: 2.5rem;
}
.button{
    background:#00203FFF;
}
.button:hover{
    background: rgb(124, 207, 170);
    
}

.btnposition{
    float: left;
}
:root{
    --green:rgb(124, 207, 170);
    --black:#00203FFF;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}
a
{
    text-decoration: none;
    color: #00203FFF;
    font-size: 28px;
}
/* a:active, 
a:hover{
    color:#fff;
    background: var(--green);
} */
header{
    position: fixed;
    top:0; left: 0; right:0;
    background: #fff;
    padding:1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
    font-size:24px;
}

header .logo{
    color:var(--black);
    font-size: 2.5rem;
    font-weight: bolder;
}

header .logo i{
    color:var(--green);
}


</style>