<html>
    <head>
    <link rel="stylesheet" href="menuStyle.css" >
    <link rel="stylesheet" href="style2.css" >


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    
    <a href="#" class="logo"><i class="fas fa-utensils"></i>Grand Restaurant</a>

    <nav class="navbar">
        <!-- <a class="active" href="#home">home</a> -->
       
        <!-- <a href="#menu">menu</a> -->
       
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <div class="search-box">
          
        <a href="#" class="icon">
        
        </a>    
    </div>
        <!-- <a href="cart_page.php" class="fas fa-shopping-cart"> </a> -->
        <a href="cart_page.php" class="icon-wrapper fas fa-shopping-cart cart-icon" data-number="<?php if(isset($_SESSION['counter'])){echo $_SESSION['counter'];} else echo "0"; ?>"> </a>
        <a href="profile.php"style='font-size:24px' class='fas'>&#xf406; </a>
        <!-- <i value="" class="img-wrapper fas " id=""  ><img src=
        <?php //echo $_SESSION['Image'];?>
        ></i> -->
    </div>

</header>
    <a href="clear.php" style="padding: 200px;">click</a>
    


    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
.float-container {

    padding-top: 50px;
}

.float-child {
    width: 50%;
    float: left;
    /* margin:left; */
 
}  
.float-child1 {
    width: 50%;
    float: left;
    margin:right;
 
}  
.float-child2 {
    width: 33%;
    float: left;
    margin:right;
    height:20%;
 
}  
.content span{
    color:rgb(124, 207, 170);
    font-size: 2.5rem;
}

 .content h3{
    color:var(--black);
    font-size: 7rem;
}

 .content p{
    color:var(--light-color);
    font-size: 2.2rem;
    padding:.5rem 0;
    line-height: 1.5;
}
.btnn{
    margin-top: 1rem;
    display: center;
    font-size: 1.7rem;
    color:#fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btnn:hover{
    background:rgb(124, 207, 170);;
    letter-spacing: .1rem;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>



<div class="float-child">
<div class="content" style="text-align:center">
                   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     
                    <span>Hello Habiba</span>
                    <br>
                   <br>
                    <h3>our popular Dishes</h3>
                   <br><br><br><br>
        
            
                    <a href="menu.php" class="btnn">Jump To Menu</a>
                </div>
                </div>

                <div class="float-container"> 
<div class="float-child1">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="imagescopy/slider1.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="imagescopy/slider2.png" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="imagescopy/slider3.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="imagescopy/slider4.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="imagescopy/slider5.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="imagescopy/slider5.png" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="imagescopy/slider6.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="imagescopy/slider7.png" style="width:100%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br><br><br><br><br><br><br><br><br><br><br>
</div>

</div>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>


<section class="review" id="review">

    <h3 class="sub-heading" style="color:rgb(124, 207, 170);"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide float-child2">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="imagescopy/habiba2.png" alt="">
                    <div class="user-info">
                        <h3>Habiba Mohamed</h3>
                        <div class="stars">
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                        </div>
                    </div>
                </div>
                <p>Best Restaurant in town, I'd definitely order your amazing pasta again.</p>
            </div>

            <div class="swiper-slide slide float-child2">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="imagescopy/mina.png" alt="">
                    <div class="user-info">
                        <h3>Mina Antoun</h3>
                        <div class="stars">
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                        </div>
                    </div>
                </div>
                <p>I've never eaten such a delicious burger in my entire life, and thank you for the service too.</p>
            </div>

            <div class="swiper-slide slide float-child2">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="imagescopy/nour.png" alt="">
                    <div class="user-info">
                        <h3>Nour Nader</h3>
                        <div class="stars">
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star" style="color:rgb(124, 207, 170);"></i>
                            <i class="fas fa-star-half-alt" style="color:rgb(124, 207, 170);"></i>
                        </div>
                    </div>
                </div>
                <p>I created my own sandwich and i didn't expect that all the veggies would be this fresh.</p>
            </div>


        </div>
        

    </div>

    
</section>





</html>