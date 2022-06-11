<?php
session_start();
    ?>
    <?php include 'database.php';?>
<html>
<head>
    <link rel="stylesheet" href="menuStyle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<header>
    
    <a href="#" class="logo"><i class="fas fa-utensils"></i>Grand Restaurant</a>

    <nav class="navbar">
      
       
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart_page.php" class="icon-wrapper fas fa-shopping-cart cart-icon" data-number="<?php if(isset($_SESSION['counter'])){echo $_SESSION['counter'];} else echo "0"; ?>"> </a>
        <a href="profile.php"style='font-size:24px' class='fas'>&#xf406; </a>

</header>
</head>

<body>
    <div style="padding-top: 100px;">
<?php

$conn = mysqli_connect($server, $user, $pass, $db );
if(!$conn){
die ("Connection failed" . mysqli_connect_error());
}
$email = $_SESSION['email'];
 $sql="SELECT * from users where Email='$email'";
 $result = mysqli_query($conn,$sql);
 while($result2=mysqli_fetch_array($result)){
    echo' <div class="card">';
    echo "<img src=".$result2['img']." style = "."width:100%".">"."<br>"."<br>";
    echo "<h1>".$result2['FN']." ".$result2['LN']."</h1>"."<br>"."<br>"."<br>";
    // echo "<h1>".$result2['LN']."</h1>";
    echo"<p class="."title"."> ".$result2['Email']."</p>"."<br>"."<br>"."<br>";
    echo"<p class="."title"."> ". $result2['Password']."</p>"."<br>"."<br>"."<br>";
    echo"<p class="."title2"."> ". $result2['National_ID']."</p>"."<br>"."<br>"."<br>";
    echo"<p class="."title2"."> ". $result2['Phone_Num']."</p>"."<br>"."<br>"."<br>";
    echo"<p> <button>Edit</button> </p>";
 }

?>
</div>
</body>
</html>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
}

.title {
  color: #00203FFF;
  font-size: 16px;
  font-style: bold;
}
.title2 {
  color: #00203FFF;
  font-size: 16px;
  font-style: bold;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #00203FFF;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
h1{
    color: #00203FFF; 
}
    </style>