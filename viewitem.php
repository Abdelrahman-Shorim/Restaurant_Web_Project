<?php session_start();?>
<html>
<head>
<link rel="stylesheet" href="menuStyle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    $name=$result2['Name'];
    $price=$result2['Price'];
    $id=$result2['I_ID'];
    echo'<section class="menu imagebox " id="menu">';
     echo '<div class = "box-container">';
    echo '<div class = "box">';
    
    echo '<div class = "image">';
    echo'<img src="/'.$result2["img"].'" > ';
    // echo'<a href="#" class="fas fa-heart"></a>';
    echo '</div>';
    echo '<div class="content">';
    echo '<div class="stars">';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star-half-alt"></i>';
    echo '</div>';
    echo'<h3>' .$result2["Name"]. '</h3>';
    echo'<p>'. $result2["Description"] . '</p>';
    echo '<p class="price">'. $result2["Price"] .'</p>';
    
    echo '<form action="menu.php" method="post">'; //for back button
    echo '<input type="submit" class = "btn" value="back">';
    echo '<input type="hidden" name="itemtypeid" value="'.$result2["I_Type"].'">';
    echo '</form>';

    echo "<button class = 'btn' onclick='minus_quantity()' >-</button><span name='quantity' style= 'font-size: x-large;' id='quantity' value='1'>1</span></span><button class = 'btn' onclick='plus_quantity()'>+</button>  <input form='addtocartform' class = 'btn' type='submit' value='add to cart'>";

    echo '<form id="addtocartform" action="menu.php"  method="post" onsubmit="return addtocart()">';
    // echo '<input type="submit" value="add to cart">';
    // echo " <input type='submit' value='add to cart'>";
    echo '<input type="hidden" name="itemtypeid" value="'.$result2["I_Type"].'">';
    echo '</form>';
    
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "</section>";
    mysqli_close($conn);


    ?>

<div id="test"></div>
    <script>
        function plus_quantity(){
            x=document.getElementById("quantity").textContent;
            document.getElementById("quantity").textContent=++x;
            // document.getElementById("quantity").setAttribute("value",x);
            // alert(x);
               
        }
        function minus_quantity(){
            x=document.getElementById("quantity").textContent;
            if(x==1)
            alert("can't decrease because quantity is at it's minimum");
            else
            {
                document.getElementById("quantity").innerHTML=--x;
                // document.getElementById("quantity").setAttribute("value",x);
               
            }
        }
        
        function addtocart(){
             q=document.getElementById("quantity").textContent;
            alert("added");
            jQuery.ajax(
                {
                    url:"cart.php",
                    data:{
                        name:"<?php
             echo $name;
             ?>",id:"<?php
             echo $id;
             ?>",
                        quantity:q,price:<?php
                            echo $price;
                            ?>
                    },
                   type:"POST",
                   success:function(data)
                   {
                      $("#test").html(data);
                //     //    $_SESSION['cart'][$_SESSION['counter']-1]['Name']=$name;
                //     $_SESSION['cart'][$_SESSION['counter']-1]['ID']=$id;
                //     // echo "alert('Name: ". $_SESSION['cart'][$_SESSION['counter']]['Name']."');";
                //     // echo "alert('Name: ". $_SESSION['cart'][$_SESSION['counter']]['Price']."');";
                //     // echo "alert('Name: ". $_SESSION['cart'][$_SESSION['counter']]['ID']."');";
                //     // echo "alert('Name: ". $_SESSION['cart'][$_SESSION['counter']]['Quantity']."');";
                
                // //    $_SESSION['counter']=$_SESSION['counter']+1;
 
                //         // $_SESSION['cart'][$Counter]=array(
                //             //     'Quantity'=>$_POST['quantity'],
                //             //     'ID'=>'',
                //             //     'Name'=>'',
                //             //     'Price'=>$_POST['price']);
                //         ?>
                   }
               }
           );
  
    
        }

    </script>
</html>
<style>
.imagebox {
    display: grid;
    grid-template-columns: 599.9px; 
    
    
     
    
  }
    </style>