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

/*slider css*/

div.myclass{
    height: 400px;
  width: 100px;
}

body{
                margin: 0;
                padding: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                /*background: #23E3C9;*/ 
            }

            .slider{
                width: 800px;
                height: 500px;
                border-radius: 10px;
                overflow: hidden;
            }

            .slides{
                width: 500%;
                height: 500px;
                display: flex;
            }

            /*radio buttons aren't shown at the top*/
            .slides input{
                display: none;
            }

            .slide{
                width: 20%;
                transition: 2s;
            }

            .slide img{
                width: 800px;
                height: 500px;
            }

            /*css for manual slide navigation*/

            .navigation-manual{
                position: absolute;
                width: 800px;
                margin-top: 460px;
                display: flex;
                justify-content: center;
            }

            .manual-btn{
                border: 2px solid #40D3DC;
                padding: 5px;
                border-radius: 10px;
                cursor: pointer;
                transition: 1s;
            }

            /*spaces between buttons*/
            .manual-btn:not(:last-child){
                margin-right: 40px;
            }

            /*hover over button*/
            .manual-btn:hover{
                background: #40D3DC;
            }

            /*manual image choosing*/
            #radio1:checked ~ .first{
                margin-left: 0;
            }

            #radio2:checked ~ .first{
                margin-left: -20%;
            }

            #radio3:checked ~ .first{
                margin-left: -40%;
            }

            #radio4:checked ~ .first{
                margin-left: -60%;
            }

            /*css for automatic navigation*/

            .navigation-auto{
                position: absolute;
                display: flex;
                width: 800px;
                justify-content: center;
                margin-top: 460px;
            }

            .navigation-auto div{
                border: 2px solid #40D3DC;
                padding: 5px;
                border-radius: 10px;
                transition: 1s;
            }

            /*spaces between buttons*/
            .navigation-auto div:not(:last-child){
                margin-right: 40px;
            }

            #radio1:checked ~ .navigation-auto .auto-btn1{
                background: #40D3DC;
            }

            #radio2:checked ~ .navigation-auto .auto-btn2{
                background: #40D3DC;
            }

            #radio3:checked ~ .navigation-auto .auto-btn3{
                background: #40D3DC;
            }

            #radio4:checked ~ .navigation-auto .auto-btn4{
                background: #40D3DC;
            }

    </style>

<body>

<!--slider body start-->
<div class="myclass">
<div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="Menu_images\Appetizers\Aubergine Gratin.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Menu_images\Appetizers\Chicken Dynamite.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Menu_images\Appetizers\Chicken Strips.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Menu_images\Appetizers\Combo Platter.jpg" alt="">
                </div>

                <!--automatic navigation-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
            
            <!--manual navigation-->
        </div>
        </div>

        <script type="text/javascript">
            var counter=1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked=true;
                counter++;
                if(counter>4){
                    counter=1;
                }
            }, 5000);
        </script>

<!--slider body end-->


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

  echo '<div >';
 while($result2=mysqli_fetch_array($result))
 {
     echo "<div class='container'>";
     echo '<img src="'.$result2['image'].'" alt="img" class="image">';
     echo '<div class="overlay overlayLeft">';
     echo '<div class="text">'.$result2['I_Type'].'</div>';
     echo '<div class="text2">'.$result2['description'].'</div>';
     echo '</div>';
     echo '</div>';
     //  echo'<label id ="'. $result2["ID"].'" onclick="reload(this)">' .  $result2["I_Type"] . '</label>'.'<br>';
 }
  echo '</div>';
 mysqli_close($conn);

?>
    <!-- <div class="container">
        <img src="soup.JPG" alt="img" class="image">
            <div class="overlay overlayLeft">
                <div class="text">soup</div>
            </div>
    </div>

<div class="container">
<img src="beef.JPG" alt="img" class="image">
<div class="overlay overlayLeft">
<div class="text">beef</div>
</div>
</div>

<div class="container">
<img src="chicken.JPG" alt="img" class="image">
<div class="overlay overlayLeft">
<div class="text">chicken</div>
</div>
</div>

<div class="container">
<img src="desserts.PNG" alt="img" class="image">
<div class="overlay overlayLeft">
<div class="text">dessert</div>
</div>
</div> -->
</body>
</html>