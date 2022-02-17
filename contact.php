<?php
    require("./connection/connect.php");
    if(isset($_POST['submit'])){
        $userName=$_POST['userName'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $msg=$_POST['msg'];


        $sql="insert into `comments` (userName,email,subject,msg) values('$userName','$email','$subject','$msg')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:contact.php');
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
    <title>Contact us</title>

    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/fontawesome/js/all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
.prev-comments {
    margin-top: 20px;
}

.prev-comments .single-item {
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;
}

.prev-comments .single-item h4 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #111;
}

.prev-comments .single-item a {
    margin: 10px 0;
    font-size: 1rem;
    color: #111;
    text-decoration: none;
    display: inline-block;
}

.prev-comments .single-item p {
    font-size: .9rem;
    color: #111;
}
</style>

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
    <div class="main-topic">
        <h1 class="headline">Contact Us</h1>
        <p class="subline">Home > Contact ></p>
    </div>
    <section class="home"></section>
    <section class="contact-form">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126797.88899092535!2d80.30009846912935!3d6.7167706770767515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3beb435df712f%3A0xc14a5df053ff0561!2sRatnapura!5e0!3m2!1sen!2slk!4v1644175699157!5m2!1sen!2slk"
            width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="container">
            <div class="title">Write Us</div>
            <form action="#" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your full name" name="userName" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Subject</span>
                        <input type="text" placeholder="Enter your subject" name="subject" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Message</span>
                        <textarea type="text" placeholder="Write the message" name="msg" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container">

            <div class="prev-comments">
                <?php 
			
                        $sql = "SELECT * FROM comments";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

			        ?>
                <div class="single-item">
                    <h4><?php echo $row['userName']; ?></h4>
                    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                    <h5><?php echo $row['subject']; ?></h5>
                    <p><?php echo $row['msg']; ?></p>
                </div>
                <?php

                            }
                        }

                    ?>
            </div>


        </div>
    </section>
    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology
                    equipments and provides best quality services. Our staff is well trained and experienced,
                    offering....</p>

                <ul class="sci">
                    <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram-square"></i></i></a></li>
                    <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href=""><i class="fab fa-youtube-square"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="sec contact">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker"></i></span>
                        <span>Nataliya salon,<br>
                            Panadura Rd,<br>Ingiriya.</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <p><a href="tel:+0342266010">+034 226 6010</a></p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <p><a href="isurubridle@gmail.com">isurubridle@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>