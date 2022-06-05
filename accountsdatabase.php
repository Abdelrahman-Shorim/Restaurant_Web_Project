<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "restaurant_web_project";


$conn = mysqli_connect($server, $user, $pass, $db );
if(!$conn){
die ("Connection failed" . mysqli_connect_error());
}

$valid = true;

if(isset($_POST['submit'])){ 
  $imagename=$_FILES['img']['name'];
  $imagetype=$_FILES['img']['type'];
  $imageerror=$_FILES['img']['error'];
  $imagetemp=$_FILES['img']['tmp_name'];
  $imagepath="Profile_pictures/";
$img=$imagepath.$_POST['email'];
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==true) {
    
      } else {
        echo("$_POST[email] is not a valid email address \n");
        $valid = false;
      }
      

     if( strlen($_POST["password"])<8)
     {
        echo("Password Not valid \n");
        $valid = false;
     }
     if($_POST['password']===$_POST['confirmpassword'])
     {}
     else{echo("Confirm password is not identical to the password \n");
    $valid=false;}
     if( strlen($_POST["nationalID"])<14 || strlen($_POST["nationalID"])>14)
     {
        echo("National ID Not valid \n");
        $valid = false;
     }
  
 

if (filter_var($_POST["phonenumber"], FILTER_VALIDATE_INT) ==true) {
 
} else {
  echo("Phone_Num is not valid \n");
  $valid = false;
}

  if($valid == true){

        
$sql = "INSERT INTO `users` (`U_ID`, `FN`, `LN`, `Email`, `Password`, `img`, `National_ID`, `Gender`, `Phone_Num`, `U_Type`) VALUES (NULL, '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '$img', '".$_POST['nationalID']."', '1', '"."0".$_POST['phonenumber']."', '1');";

if(($conn->query($sql))==true){
    // echo "Record Added Successfully";
// echo $sql;
if(is_uploaded_file($imagetemp))
{
  // echo $imagetemp;
  echo "\n ".$imagepath.$_POST['email']."    hiiiii";
  if(move_uploaded_file($imagetemp, $imagepath.$_POST['email']))
    {
        echo "successfully uploaded your image";
    }
    else
    {
        echo "failed to move your image";
    }
}
else
{
    echo "failed to upload your image";
}


}
else {
    echo $sql;
    echo"fail";
}		 
}
}
else{
echo "im here";

}
$conn->close();
?>