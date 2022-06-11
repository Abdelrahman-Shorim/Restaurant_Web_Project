<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "restaurant_web_project";

$conn = mysqli_connect($server, $user, $pass, $db );
if(!$conn){
die ("Connection failed" . mysqli_connect_error());
}

    if(isset($_POST['save'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $Password=$_POST['password'];
        $Email=$_POST['email'];
        $phone=$_POST['phonenumber'];
        
        // $Image=$_POST['image'];

        $query="UPDATE users SET name='$Name', user_name='$Username', password='$Password', email='$Email', WHERE U_ID=" . $user_data['user_id'] ;
        $exec = mysqli_query($con, $query);
        header("Refresh: 0");

    }






















?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <script src="../JS/quality.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="../CSS/modal.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>
<div class="wrapper">
        <div class="left">
            <?php echo '<img src="data:image;base64,' .base64_encode($user_data['image']).'" alt="user" width="200">'?>
            <h4><?php echo $user_data['name'] ?></h4>
            <p><?php echo $user_data['role_name'] ?></p>
        </div>
        <div class="right">

            <div class="info">
                <h3>information</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>UserName</h4>
                        <p><?php echo $user_data['user_name']?></p>
                    
                    </div> 
                    
                    <div class="data">
                        <h4>Email</h4>
                        <p><?php echo $user_data['email']?></p>
                    </div>
                    <div class="data">
                        <h4>Birth Date</h4>
                        <p><?php echo $user_data['user_birth']?></p>
                    </div>
                </div>
            </div>

            <!-- <div class="flights">
                <h3>flights</h3> 
                <div class="flights_data">
                </div>
            </div> -->
            
            <button class="editbtn" onclick="openModal()">Edit</button> 

        </div>
    </div>


    <!-- <div class="profileData" style="margin: 30px auto 0 auto ; text-align: center;">
        <div class="picture">
            <?php
                echo '<img src="data:image;base64,' .base64_encode($user_data['image']).'" class="profile_picture" style="width: 200px; height: 200px;">';
            ?>
        </div>
        
        <h2 style="margin-bottom: 20px "><?php
            echo $user_data['name'];
        ?></h2>
        <p><?php
            echo $user_data['user_name'];
        ?></p>
        <p><?php
            echo $user_data['email'];
        ?></p>
        <p><?php
            echo $user_data['user_birth'];
        ?></p>
        <button onclick="openModal()">Edit</button> 
    </div> -->
    
    <div class="modal">
        <div class="modal_inner">
            <div class="modal_top">
                <div class="modal_title">Profile edit</div>
                <button class="modal_close"  onclick="closeModal()">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="modal_content">
                <form action="" method="POST" class="crud-form" enctype="multipart/form-data">
                    <div class="input-div">
                        <label>Name: </label>
                        <input type="text" name="name" placeholder="name" class="crud-form-input" value="<?php echo $user_data['name']; ?>" required><br>
                    </div>
                    <div class="input-div">
                        <label>Username: </label>
                        <input type="text" name="username" placeholder="Username" class="crud-form-input" value="<?php echo $user_data['user_name']; ?>"required><br>
                    </div>
                    <div class="input-div">
                        <label>Password: </label>
                        <input type="text" name="password" placeholder="Password" class="crud-form-input" value="<?php echo $user_data['password']; ?>"required><br>
                    </div>
                    <div class="input-div">
                        <label>E-mail: </label>
                        <input type="text" name="email" placeholder="E-mail" class="crud-form-input" value="<?php echo $user_data['email']; ?>"required><br>
                    </div>
                    <div class="input-div">
                        <label>DateOfBirth: </label>
                        <input type="Date" name="Date" class="crud-form-input" value="<?php echo $user_data['user_birth']; ?>"required><br>
                    </div>
                    <div class="input-div">
                        <label>Profile Picture: </label>
                        <input type="file" name="image" id="image" class="form-image"><br>
                    </div> 
                    <div class="modal_bottom">
                        <button class="modal_button" type="submit" name="save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 