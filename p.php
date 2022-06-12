

<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "restaurant_web_project";

$conn = mysqli_connect($server, $user, $pass, $db );
if(!$conn){
die ("Connection failed" . mysqli_connect_error());
}

    // if(isset($_POST['save'])){
        $fname=$_POST['FN'];
        $lname=$_POST['LN'];
        $Password=$_POST['Password'];
        $Email=$_POST['Email'];
        $phone=$_POST['Phone_number'];
        

        $_SESSION['Firstname']=$fname;
        $_SESSION['lastname']=$lname;
        $_SESSION['email']=$Email;
        $_SESSION['password']=$Password;
        $_SESSION['Phone_Num']=$phone;

        // $Image=$_POST['image'];

        // $query="UPDATE users SET FN='$fname', LN='$lname', Password='$Password', email='$Email', WHERE U_ID=" . $user_data['user_id'] ;
        // $query="UPDATE `users` SET `FN` = 'Abdoz' WHERE `users`.`U_ID` = 2;";

        // $q="UPDATE `users` SET `FN` = '$fname', `LN` = '$lname', `Email` = '$Email', `Password` = '$Password', `img` = 'Profile_pictures/default.png', `Phone_Num` = '$phone' WHERE `users`.`U_ID` = $_SESSION["ID"];
        // ";
$q="UPDATE `users` SET `FN` = '".$fname."', `LN` = '".$lname."', `Email` = '".$Email."', `Password` = '".$Password."', `Phone_Num` = '".$phone."' WHERE `users`.`U_ID` = ".$_SESSION["ID"].";";
        $exec = mysqli_query($conn, $q);
        if(!$exec) die('error');
        header("Refresh: 0");

    // }
?>
