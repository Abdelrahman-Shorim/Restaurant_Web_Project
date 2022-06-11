<?php 
session_start(); 
include "logindatabase.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;

    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

$sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Email'] === $email && $row['Password'] === $password) {
        echo "Logged in!";
        $_SESSION['ID'] = $row['U_ID'];
       $_SESSION['email']=$_POST['email'];
       $_SESSION['Firstname']=$row['FN'];
       $_SESSION['lastname']=$row['LN'];
       $_SESSION['password']=$_POST['password'];
       $_SESSION['Phone_Num']=$row['Phone_Num'];
       $_SESSION['Image']=$row['img'];
        header("Location: home_page.php");
        exit();
    }
    else{
            // echo "Incorrect Username or Password";
        header("Location: website.php?error=correct Username or password");
        exit();
    }
}

else{
    // echo "Incorrect Username or Password";
    header("Location: website.php?error=Incorrect Username or password");
    exit();
}

}
else{
    // echo "Incorrect Username or Password";
    header("Location: website.php?error=correct");
    exit();
}

?>
