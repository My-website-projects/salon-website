<?php
    require("./connection/connect.php");
    if(isset($_POST['submit'])){
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $nic=$_POST['nic'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];


        $sql="insert into `customer` (Fname,Lname,email,number,nic,password,gender) values('$Fname','$Lname','$email','$number','$nic','$password','$gender')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:login.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="CSS/register.css">
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
        <div class="title">Register Here</div>
        <form method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your first name" name="Fname" required> 
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your last name" name="Lname" required> 
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="email" required> 
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" name="number" required> 
                </div>
                <div class="input-box">
                    <span class="details">NIC</span>
                    <input type="text" placeholder="Enter your nic" name="nic" required> 
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="password" required> 
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" value="male" id="dot-1">
                <input type="radio" name="gender" value="female" id="dot-2">
                <input type="radio" name="gender" value="other" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="submit" name="submit">
            </div>
            <div class="login-text">
                <p class="text">You have already account <a class="login-btn" href="login.php">Login here</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>