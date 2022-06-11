<?php include 'database.php';?>
<?php

    // $hn='localhost';
    // $db='project';
    // $un='root';
    // $pw='';

    $imagename=$_FILES['img']['name'];
    $imagetype=$_FILES['img']['type'];
    $imageerror=$_FILES['img']['error'];
    $imagetemp=$_FILES['img']['tmp_name'];

    
    $Name=$_POST['Name'];
    $Description=$_POST['Description'];
    $Price=$_POST['Price'];
    $type=$_POST['type'];
    $imagepath="Restaurant_Web_Project/Menu_images/".$type."/";
    $img=$imagepath.$imagename;

    
    if($type=="Appetizers")
        $num=1;
    else if($type=="Beef")
        $num=2;
    else if($type=="Chicken")
        $num=3;
    else if($type=="Desserts")
        $num=4;
    else if($type=="Drinks")
        $num=5;
    else if($type=="Kids")
        $num=6;
    else if($type=="Pasta")
        $num=7;
    else if($type=="Pizza")
        $num=8;
    else if($type=="Salads")
        $num=9;
    else if($type=="Sandwiches")
        $num=10;
    else if($type=="Seafood")
        $num=11;
    else if($type=="Soups")
        $num=12;
    else if($type=="Veal")
        $num=13;
        
    echo "Name: ".$Name."<br>";
    echo "Description: ".$Description."<br>";
    echo "Price: ".$Price."<br>";
    echo "img: ".$img."<br>";
    echo "type: ".$type."    ".$num."<br>";
        
    $conn = mysqli_connect($server, $user, $pass, $db );
    if($conn)
    {
        echo "succ";
    }
    $query= "INSERT INTO `items` (`I_ID`, `Name`, `Description`, `Price`, `img`, `I_Type`) 
    VALUES (NULL, '$Name', '$Description', '$Price', '$img', '$num')";

    if($conn->query($query))
    {
        echo "added succesfully";
    }
    $conn->close();




    
    // if(isset($_POST['pic']))
    //     $image=$_POST['pic'];
    // else 
    //     $image=$_FILES['pic']['name'];

    // echo $imagepath."<br>";
    // echo $imagetemp."<br>";
    if(is_uploaded_file($imagetemp))
    {
        if(move_uploaded_file($imagetemp, $imagepath.$imagename))
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


    // $conn=new mysqli($hn,$un,$pw,$db);
    // if($conn->connect_error) die("fatal error");

    // $query="INSERT INTO food (name,price,type,image) 
    // VALUES ('$name','$price','$type','$image')";
    // $result=$conn->query($query);
    // if(!$result) die("cannot insert");
    // $conn->close();


    // echo <<<_END
    // <html>
    // <body>
    // name is: $name<br>
    // price is: $price<br>
    // type is: $type<br>
    // image is: $image<br>
    // </body>
    // </html>
    // _END;
?>
<html>
    <a href="form1.html">hello</a>
</html>