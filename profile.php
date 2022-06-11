<?php
session_start();
    ?>
<html>
<head>
 



    <link rel="stylesheet" href="menuStyle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">//Including apis of google library </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">//Including cloudflare library</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">//Including bootstrapccdn library</script> 
<header>
    
    <a href="menu.php" class="logo"><i class="fas fa-utensils"></i>Grand Restaurant</a>

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
// $server = "localhost";
// $user = "root";
// $pass = "";
// $db = "restaurant_web_project";

// $conn = mysqli_connect($server, $user, $pass, $db );
// if(!$conn){
// die ("Connection failed" . mysqli_connect_error());
// }
// $email = $_SESSION['email'];
//  $sql="SELECT * from users where Email='$email'";
//  $result = mysqli_query($conn,$sql);
//  while($result2=mysqli_fetch_array($result)){
    echo' <div id="profile"  class="card">';
    echo "<img src=".$_SESSION['Image']." style = "."width:100%".">"."<br>"."<br>";
    echo "<h1>".$_SESSION['Firstname']."</h1>"."<br>"."<br>"."<br>";
    echo "<h1>".$_SESSION['lastname']."</h1><br>";
    echo"<p class="."title"."> ".$_SESSION['email']."</p>"."<br>"."<br>"."<br>";
    echo"<p class="."title"."> ". $_SESSION['password']."</p>"."<br>"."<br>"."<br>";
    echo"<p class="."title2"."> ". $_SESSION['Phone_Num']."</p>"."<br>"."<br>"."<br>";
    echo "<button onclick="."profiledit()".">Edit</button>";   
    echo "<button onclick="."logout()".">Logout</button>";  
//  }

?>

</div>
</body>
</html>

<script>
  function psave(){
    jQuery.ajax({
url:"p.php",
data:{FN:$('#Fname').val(),LN:$('#Lname').val(),Email:$('#Email').val(),Password:$('#Password').val(),Phone_number:$('#Phone_number').val()},
type:"POST",
success:function(){location.reload();}


    });
  
  }
function profiledit(){
alert("hello");
  jQuery.ajax({
url:"editprofile.php" ,
data:{ email: "<?php echo $_SESSION['email']?>"},
type: "POST" , 
success: function(data){
$("#profile").html(data);
}
});

}
function logout(){
<?php
session_destroy();
?>
window.location.replace("http://localhost/restaurant_web_project/website.php");
}

  </script>
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
