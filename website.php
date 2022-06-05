<?php
session_start();
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grand Resturant</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.php'class="logo"><i class="fas fa-utensils"></i>Grand Restaurant</a>

                
            </div>
            <!-- <video autoplay muted loop id="myVideo">
  <source src="video.mp4" type="video/mp4">
</video> -->
            <nav>
                <ul id='MenuItems'>
                    <li><a href='website.php'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'><b>Log in</b></button>
                    <button type='button'onclick='register()'class='toggle-btn'><b>Sign up</b></button>
                </div >
                <form id='login' class='input-group-login' action = "validate.php" method="post" >
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type='text'class='input-field'placeholder='Email Address' required name = "email">
		    <input type='password'class='input-field'placeholder=' Password' required name="password" >
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'><b>Log in</b></button>
        
		 </form>
		 <form id='register' class='input-group-register' action = "accountsdatabase.php" method="post" enctype="multipart/form-data">
             <label for="file"style="color: #999;">Upload Your Image</label>
            <input type='file'class='input-field'placeholder='Image'  name="img" id="img" accept=".jpeg, .jpg, .png" >
		     
            <input type='text'class='input-field'placeholder='First Name' required name="firstname" >
		     <input type='text'class='input-field'placeholder='Last Name ' required name="lastname">
             <input type='text'class='input-field'placeholder='Phone Number' required name="phonenumber" >
            <!-- <label for="file" style="color: #999;" >Upload Your National ID</label> -->
             <input type='text'class='input-field'placeholder='National ID' required name="nationalID">
		     <input type='text'class='input-field'placeholder='Email Address' required name="email"> 
		   <input type='password'class='input-field'placeholder='Password' required name="password"> 
		    <input type='password'class='input-field'placeholder='Confirm Password'  required name="confirmpassword">
		     <div style="color: #999;"><input type='checkbox' class='check-box'> I agree to the terms and conditions</div>
             <button type='submit'class='submit-btn' name='submit'><b>Register</b></button>
                   <!-- <input type='submit'class='submit-btn' value="Register"> -->
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>




</body>
</html>