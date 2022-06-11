<?php
session_start();
?>
<?php include 'database.php';?>

<?php
// echo "<script>alert('".$_POST['item_id']."')</script>";

// echo "<script>alert('".$_SESSION['ID']."')</script>";
// echo "<script>alert('".$_POST['comment']."')</script>";


$conn = mysqli_connect($server, $user, $pass, $db );

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