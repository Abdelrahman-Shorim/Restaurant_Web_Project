<?php 
session_start();
    // echo "<script>alert('quantity: ".$_POST['quantity']."')</script>";
  
?>

<html>
    <head>
    <link rel="stylesheet" href="menuStyle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>

.h11 {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 140px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  color: while;
  background:#00203FFF;
  /* background-color: transparent */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 90px;
  
}

/* The navigation menu links */
.h11 label {
  padding: 35px 5px 0px 10px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  /* padding-top: px; */
}

/* When you mouse over the navigation links, change their color */
.h11 label:hover {
  color: #f4b41a;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .h11 {padding-top: 15px;}
  .h11 label {font-size: 18px;}
}

.float-container {
   /* border: 3px solid #fff;*/
    padding: 20px;
    width: 50%;
    height: 40;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
    background-color: green;
   
  }
  
  .float-child {
    height: 100px;
  width: 100px;
  display: grid;
  background-color: transparent;
  float:left; /* add this */
  margin: 100px 5px 50px 170px;
      
  } 
  

</style>
<header>
    
    <a href="#" class="logo"><i class="fas fa-utensils"></i>Grand Restaurant</a>

    <nav class="navbar">
        <!-- <a class="active" href="#home">home</a> -->
       
        <!-- <a href="#menu">menu</a> -->
       
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        
        <!-- <a href="cart_page.php" class="fas fa-shopping-cart"> </a> -->
        <a href="cart_page.php" class="icon-wrapper fas fa-shopping-cart cart-icon" data-number="<?php if(isset($_SESSION['counter'])){echo $_SESSION['counter'];} else echo "0"; ?>"> </a>
        <i value="" class="img-wrapper fas " id=""  ><img src=<?php echo $_SESSION['Image'];?>></i>
    </div>

</header>
 
    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="style.css">
    <!-- <div class="full-page"> -->

    <script>
        function getitems(x)
        {
            jQuery.ajax(
                {
                    url:"typeitems.php",
                    data:'id='+x,
                   type:"POST",
                   success:function(data)
                   {
                        $("#itemsdata").html(data);
                   }
               }
           );
        }
    </script>

<?php
    // to get item types 
    $conn = new mysqli("localhost", "root", "", "restaurant_web_project");
    if($conn->connect_error) die("fatal Error");

    $query="SELECT * FROM item_types";
    $result=$conn->query($query);
    if(!$result) die("fatal Error");

    //echo '<div class="sidenav" >';
    echo '<div class="h11">';
    while($result2=mysqli_fetch_array($result))
    {
        echo'<label id ="'. $result2["ID"].'" onclick="getitems(this.id)">' .  $result2["I_Type"] . '</label>'.'<br>';
    }
    echo '</div>';
    mysqli_close($conn);
    ?>
    

<div id="itemsdata"> <!-- check law fe item type ama ydoos back mel view item -->
    <?php
        if(isset($_POST['itemtypeid'])) {
            echo '<script>getitems('.$_POST['itemtypeid'].')</script>';
        }
    ?>
</div>

<!-- </div> -->
<!-- //<php  -->
<!-- // echo $_SESSION['cart'][0]['ID'];
?> -->


<!-- <div class="loader-container">
    <img src="images/loader.gif" alt="">
</div> -->

</html>
<style>
.icon-wrapper{
    width: 50%;
    height: 50%;
    position: relative;
  
}
.icon-wrapper::after{
    content: attr(data-number);
    width:20px;
    height: 20px;
    background-color: #d32b2b;
    color:#fff;
    display: grid;
    place-content: center;
    border-radius: 50%;
    position: absolute;
    top:5px;
    right:0;
    opacity:0;
    transform:(translateY(3px));
    font-size: small;
}
.icon-wrapper::after{
    opacity: 1;
    transform: translateY(0);
    transition: opacity.25s;
    transform: .25s;
}
.cart-icon{
    max-width: 100%;
}
.icon-wrapper:hover .cart-icon{
    animation:shake 1s forwards;
}
@keyframes shake{
    10%{transform: rotate (15deg);}
    20%{transform: rotate(-15deg);}
    30%{transform:rotate(15deg);}
    50%{transform: rotate(0deg);}
}

/* .profile{
--bg-clr:#131313;
background-color:var(--bg-clr);} */
.img-wrapper{
max-width:150px;
position:relative;

} 
 .img-wrapper img{
width: 100%;
display:block;
border-radius:50%;} 
 /* .img-wrapper::before{
content:"";
position:absolute;
inset: -15px;
border: 6px solid greenyellow;
border-top-color:#fff;
border-bottom-color:#ababab;
border-radius:50%;
z-index: -1;
animation:spin 3s linear infinite;} */

</style>