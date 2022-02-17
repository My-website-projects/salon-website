<?php
    require("./connection/connect.php");
    if(isset($_POST['submit'])){

        $sql = "select * from `customer` where `email`='$_POST[email]' and `password`='$_POST[password]'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['emailid'] = $_POST['email'];
            header('location:index02.php');
        }
        else{
            echo "<script>alert('Incorrect Password! Try again.');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <header>
        <img class="logo" src="./assets/images/icons/logo.png" alt="">
        <nav>
            <ul class="nav-area">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="title">Login Here</div>
        <form action="login.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="email" required> 
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="password" required> 
                </div>
            </div>
            <div class="button">
                <input type="submit" value="submit" name="submit">
            </div>
            <div class="login-text">
                <p class="text">Create your account <a class="login-btn" href="register.php">Register here</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>