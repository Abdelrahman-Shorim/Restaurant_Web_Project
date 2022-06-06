<?php session_start();?>
<html>
<head>



<link rel="stylesheet" href="menuStyle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
<script src="https://unpkg.com/babel-standalone/babel.min.js"></script>

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

    ?>
    <div id="rate">
    <img onclick="submitrate(this.name)" name="1" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="rating/1.png" alt="Smiley" width="32" height="32">
    <img onclick="submitrate(this.name)" name="2" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="rating/2.png" alt="Smiley" width="32" height="32">
    <img onclick="submitrate(this.name)" name="3" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="rating/3.png" alt="Smiley" width="32" height="32">
    <img onclick="submitrate(this.name)" name="4" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="rating/4.png" alt="Smiley" width="32" height="32">
    <img onclick="submitrate(this.name)" name="5" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="rating/5.png" alt="Smiley" width="32" height="32">
    </div>

<div id="textareadata"></div>
<div id='submittextareadata' onclick='submitcomment()'></div>
    
    <?php
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
                   }
               }
           );
  
    
        }

    </script>

<script >
    ReactDOM.render(
        React.createElement('textarea',{id:'textarea',placeholder:'comment'},''), document.getElementById('textareadata')
    );

    ReactDOM.render(
        React.createElement('button',{id:'textarea',placeholder:'comment'},'submit comment'),  document.getElementById('submittextareadata')
    );

    function submitcomment()
    {
        let value=document.getElementById('textareadata').firstChild.value;
        if(value!="")
        {
            jQuery.ajax(
                {
                    url:"submitcomment.php",
                    data:{
                        comment:value,item_id:'<?php echo $_POST['itemid']; ?>'
                    },
                    type:"post",
                    success:function(data)
                    {
                        $("#returndata").html(data);
                    }
                }
            );
            document.getElementById('textareadata').firstChild.value="";
        }
        else
        {
            alert('no comment to submit');
        }
    }
    function submitrate(rate)
    {
        jQuery.ajax(
            {
                url:"submitrate.php",
                data:{
                    rate:rate,item_id:'<?php echo $_POST['itemid']; ?>'
                },
                type:"post",
                success:function(data)
                {
                    $("#returndata").html(data);
                }
            }
        );
    }
    
function bigImg(x) {
  x.style.height = "64px";
  x.style.width = "64px";
}

function normalImg(x) {
  x.style.height = "32px";
  x.style.width = "32px";
}
</script>
</html>
<style>
.imagebox {
    display: grid;
    grid-template-columns: 599.9px; 
  }
</style>

<div id="returndata"></div>