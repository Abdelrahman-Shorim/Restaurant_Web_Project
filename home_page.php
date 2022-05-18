<html>
<style>
.container{
    position:relative;
    width: 500px;
    height: 500px;
    display: inline-block;
}
.image{
    display:block;
    width: 500px;
    height: 500px;
}
.overlay{
    position: absolute;
    transition: all .4s ease;
    opacity:0;
    background-color: #eee;
}
.text{
    color: black;
    font-family: sans-serif;
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 20px;
}

.text2{
    color: black;
    font-family: sans-serif;
    position: absolute;
    top: 70%;
    left: 5%;
    font-size: 20px;
}
.container:hover .overlay{
    opacity:1;
    background: rgba(192,192,192,0.6);
}
.overlayLeft{
    height: 100%;
    width: 0;
    top: 0;
    left: 0;
}
.container:hover .overlayLeft{
    width: 100%;
}
    </style>

<body>

<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "restaurant_web_project";

 $conn = new mysqli($servername, $username, $password, $dbname);
 if($conn->connect_error) die("fatal Error");

 $query="SELECT * FROM item_types";
 $result=$conn->query($query);
 if(!$result) die("fatal Error");

//  echo '<div >';
 while($result2=mysqli_fetch_array($result))
 {
     echo "<div class='container' id='".$result2['ID']."' onclick='gotomenu(this.id)'>";
     echo '<img src="'.$result2['image'].'" alt="img" class="image">';
     echo '<div class="overlay overlayLeft">';
     echo '<div class="text">'.$result2['I_Type'].'</div>';
     echo '<div class="text2">'.$result2['description'].'</div>';
     echo '<form id="menu'.$result2['ID'].'" action="menu.php" method="post" onsubmit="return addtocart()">';
    echo '<input type="hidden" name="itemtypeid" value="'.$result2["ID"].'">';
    echo '</form>';
     echo '</div>';
     echo '</div>';

     //  echo'<label id ="'. $result2["ID"].'" onclick="reload(this)">' .  $result2["I_Type"] . '</label>'.'<br>';
 }
//  echo '</div>';
 mysqli_close($conn);

?>
    <script>
        function gotomenu(s){
            document.getElementById('menu'+s).submit();
        }
    </script>
</body>
</html>