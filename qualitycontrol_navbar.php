<html>
	<head>
		<style>
			.topnav{
				background-color: black;
				overflow:hidden;
				color: white;
				font-size: 17px;
				padding: 14px 16px;
			}
			.topnav a{
				float:left;
				display:block;
				color: white;
				text-align: center;
				padding: 0px 16px;
				text-decoration: none;
				font-size: 17px;
			}
			.topnav a:hover{
				background-color: green;
				color: white;
			}
		</style>
	</head>
	<body>		
		<div class="topnav">
			<?php
				
					echo"<a href='qualitycontrol_Home.php'>Home</a>";
					echo"<a href='quality_control_comments.php'>Comments</a>";
					echo"<a href='qualitycontrol_rating.php'>Rating</a>";
					echo"<a href='qualitycontrol_promotion.php'>Promotion</a>";


					// echo"<a href='dbconnection2.php'>Delete</a>";
					echo"<a href='dbconnection.php'>Edit Items</a>";
					// echo"<a href='editpage.php'>Edit</a>";
					echo"<a href='add1.php'>add</a>";




					

				
				?>
		</div>
		<br><br>
	</body>
</html>