
<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "restaurant_web_project");//Connecting to the sql database and creating an object called 'conn'
$sql = "SELECT * FROM items WHERE Name LIKE '%".$_POST['name']."%'";// The sql query that fetches for name and ingredients that are sent from the other page
$result = mysqli_query($conn, $sql);//making the query into the sql database
echo'<section class="menu wrapper" id="menu">';
if(mysqli_num_rows($result)>0){
while($result2=mysqli_fetch_array($result))
{ 
   // echo '<div class = "float-child">';
	echo '<div class = "box-container">';
	echo '<div class = "box">';
	
   // echo'<label id ="'. $result2["I_ID"].'"  >' .'<br>' . $result2["Name"]. '<br>' . '<br>' . '<div class = "image">' .'<img src="/'.$result2["img"].'" width="300" height="300"> <br>'. '</div>' .'<p>'. $result2["Description"] . '</p>'.'<br>' .'<span class="price">'. $result2["Price"] .'</span>'.'<br>'.'</label>';
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
	// echo'<p>'. $result2["Description"] . '</p>';
	echo '<p class="price">'. $result2["Price"] .'</p>';

	echo '<form action="viewitem.php" method="post">';
	echo '<input type="hidden" name="itemid" value="'.$result2["I_ID"].'">';
	echo '<input type="submit" value="order" class = "btn">';
	echo "</form>";
	
	echo "</div>";
	echo "</div>";
	echo "</div>";
   // echo "</div>".'<br>'.'<br>';  
}
}
else {echo"not found";}

?>
<html>
<head>
<link rel="stylesheet" href="menuStyle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>


</html>