<?php
    session_start();
    require("./connection/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    * {
    margin: 0;
    padding: 0
}

body {
    background-color: #000
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    align-items: center;
    cursor: pointer;
    transition: all 0.5s;
    justify-content: center;
}
h3{
    color: red;
    margin-top: 20px;
}
.line{
    display: flex;
    margin-top: 10px;
}

</style>
<body>
    <section>
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            
            <div class="card p-4">
                <h1>My Profile</h1>
            <?php
                    $sql = "SELECT * from customer where email = '".$_SESSION['emailid']."'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $Fname=$row['Fname'];
                            $Lname=$row['Lname'];
                            $email=$row['email'];
                            $number=$row['number'];
                            $nic=$row['nic'];
                            $gender=$row['gender'];
                             echo '<h3>'.$Fname.' '.$Lname.'</h3>';
                             echo '<div class="line"><h5>Email</h5><p> - '.$email.'</div>';
                             echo '<div class="line"><h5>Phone Number</h5><p> - '.$number.'</div>';
                             echo '<div class="line"><h5>NIC</h5><p> - '.$nic.'</div>';
                             echo '<div class="line"><h5>Gender</h5><p> - '.$gender.'</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</body>

</html>