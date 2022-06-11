<?php include 'database.php';?>
<?php


/*
$imagename=$_FILES['image']['name'];
$imagetype=$_FILES['image']['type'];
$imageerror=$_FILES['image']['error'];
$imagetemp=$_FILES['image']['tmp_name'];
$imagepath="I:\";
if(is_uploaded_file($imagetemp)){
    if(move_uploaded_file($imagetemp, $imagepath.$imagename)){
    echo "successfully uploaded your image";
    }
    else{
    echo "failed to move your image";
    }
    }
    else{
    echo "failed to upload your image";
    }
*/
$imagename=$_FILES['pic']['name'];
$imagetype=$_FILES['pic']['type'];
$imageerror=$_FILES['pic']['error'];
$imagetemp=$_FILES['pic']['tmp_name'];
$imagepath="C:\\xampp\\htdocs\\Restaurant_Web_Project\\images\\";
if(isset($_POST['name']))$name=$_POST['name'];
else $name="(not entered)";
if(isset($_POST['price']))$price=$_POST['price'];
else $price="(not entered)";
if(isset($_POST['type']))$type=$_POST['type'];
else $type="(not entered)";
if(isset($_POST['pic']))$image=$_POST['pic'];
else $image=$_FILES['pic']['name'];
if(is_uploaded_file($imagetemp)){
    if(move_uploaded_file($imagetemp, $imagepath.$imagename)){
    echo "successfully uploaded your image";
    }
    else{
    echo "failed to move your image";
    }
    }
    else{
    echo "failed to upload your image";
    }
require_once 'datain.php';
$conn = mysqli_connect($server, $user, $pass, $db );
if($conn->connect_error) die("fatal error");

$query="INSERT INTO food (name,price,type,image) 
VALUES ('$name','$price','$type','$image')";
$result=$conn->query($query);
if(!$result) die("cannot insert");
$conn->close();


echo <<<_END
<html>
<body>
name is: $name<br>
price is: $price<br>
type is: $type<br>
image is: $image<br>
</body>
</html>
_END;
?>