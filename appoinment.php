<?php
    session_start();
    require("./connection/connect.php");
    $sql = "SELECT * from customer where email = '".$_SESSION['emailid']."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $Fname=$row['Fname'];
    $Lname=$row['Lname'];
    $email=$row['email'];
    $number=$row['number'];
    if(isset($_POST['submit'])){
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $gender=$_POST['gender'];
        $service=$_POST['service'];
        
        $s=implode(' <br/> ',$service);

        $sql="insert into `appoinment` (Fname,Lname,email,number,date,time,gender,service) values('$Fname','$Lname','$email','$number','$date','$time','$gender','$s')";
        $result=mysqli_query($con,$sql);
        
        if($result){
            header('location:payment.php');
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
    <title>Appoinment</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">

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
    <section class="appoinment">
        <div class="container" style="margin-left: '28%';">
            <div class="title">Make an Appointment</div>
            <form method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter your first name" name="Fname" required
                            value=<?php echo $Fname;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Enter your last name" name="Lname" required
                            value=<?php echo $Lname;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required
                            value=<?php echo $email;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" name="number" required
                            value=<?php echo $number;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" placeholder="Enter your nic" required name="date">
                    </div>
                    <div class="input-box">
                        <span class="details">Time</span>
                        <input type="time" placeholder="Enter your password" required name="time">
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
                <div class="service-list">
                    <span class="details">Services</span><br />
                    <div class="services">
                        <div class="group">
                            <input type="checkbox" name="service[]" value="Clean Up" />
                            <label class="select" for="Clean Up">Clean Up</label>
                        </div>

                        <div class="group">
                            <input type="checkbox" name="service[]" value="Facial" />
                            <label class="select" for="Facial">Facial</label>
                        </div>

                        <div class="group">
                            <input type="checkbox" name="service[]" value="Body Waxing" />
                            <label class="select" for="Body Waxing">Body Waxing</label>
                        </div>
                        <div class="group">
                            <input type="checkbox" name="service[]" value="Hair Cut" />
                            <label class="select" for="Hair Cut">Hair Cut</label>
                        </div>
                    </div>
                    <div class="services">
                        <div class="group">
                            <input type="checkbox" name="service[]" value="Layer Cut" />
                            <label class="select" for="Layer Cut">Layer Cut</label>
                        </div>

                        <div class="group">
                            <input type="checkbox" name="service[]" value="Hair Style" />
                            <label class="select" for="Hair Style">Hair Style</label>
                        </div>

                        <div class="group">
                            <input type="checkbox" name="service[]" value="Hair Treatment" />
                            <label class="select" for="Hair Treatment">Hair Treatment</label>
                        </div>
                        <div class="group">
                            <input type="checkbox" name="service[]" value="Bridel Dressing" />
                            <label class="select" for="Bridel Dressing">Bridel Dressing</label>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Make an Appointment">
                </div>
            </form>
        </div>
    </section>
</body>
<script src="assets/fontawesome/js/all.min.js"></script>

</html>