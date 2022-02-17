<?php
    require("../connection/connect.php");
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
            header('location:CustomerTable.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="./CSS/addCustomer.css">
</head>

<body>
    <header>
        <img class="logo" src="../assets/images/icons/logo.png" alt="">
        <nav>
            <ul class="nav-area">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="addCustomer.php">Add Customer</a></li>
                <li><a href="customerTable.php">Customer List</a></li>
                <li><a href="addAppoinment.php">Add Appoinment</a></li>
                <li><a href="appoinmentTable.php">Appoinment List</a></li>
            </ul>
        </nav>
        <form action="" method="post">
            <button class="btn-area" name="logout">Log Out</button>
        </form>
    </header>
    <div class="container">
        <div class="title">Add Customer</div>
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
                <input type="submit" value="Add Customer" name="submit">
            </div>
        </form>
    </div>

</body>

</html>