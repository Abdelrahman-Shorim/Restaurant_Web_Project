<?php
session_start();
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grand Resturant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.php'>GRND Resturant</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='website.php'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>
                    <li><a href='#'><img src="Restaurant_Web_Project/downloadd.png" alt="habiba"></a></li>
                    
                </ul>
            </nav>
        
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


 <script>
const image = document.getElementById("image");         
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const phoneNumber = document.getElementById("phonenumber");
const nationalID = document.getElementById("nationalID");  
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");
</script>

</body>
</html>