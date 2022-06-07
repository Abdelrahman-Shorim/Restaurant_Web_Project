<?php
session_start();
// echo "<script>alert('".$_POST['item_id']."')</script>";

// echo "<script>alert('".$_SESSION['ID']."')</script>";
// echo "<script>alert('".$_POST['comment']."')</script>";


    $conn = new mysqli("localhost", "root", "", "restaurant_web_project");
    if($conn->connect_error) die("fatal Error");

    $query="INSERT INTO `comments` (`C_ID`, `U_ID`, `I_ID`, `comment`) 
                            VALUES (NULL, '".$_SESSION['ID']."', '".$_POST['item_id']."', '".$_POST['comment']."'); " ;


    $result=$conn->query($query);
    if(!$result) 
        die("fatal Error");
    else
        echo "<script>alert('comment added succesfully')</script>";
    mysqli_close($conn);

?>