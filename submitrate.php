<html>
    <?php
    session_start();
        $conn = new mysqli("localhost", "root", "", "restaurant_web_project");
        if($conn->connect_error) die("fatal Error");

        $query="INSERT INTO `rate` (`R_ID`, `U_ID`, `I_ID`, `rate`) 
        VALUES (NULL, '".$_SESSION['ID']."', '".$_POST['item_id']."', '".$_POST['rate']."');" ;
        $result=$conn->query($query);
        if(!$result) 
            die("fatal Error");
        else
            echo "<script>alert('rate added succesfully')</script>";
    
        mysqli_close($conn);
    ?>

    
</html>