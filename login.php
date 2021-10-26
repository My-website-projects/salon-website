<?php
    $email = $_POST['email'];
    $password = $_POST['password'];


    //Database connection

    $con = new mysqli('localhost','root','','salon');
    if($con->connect_error){
        die('Connection Faild : '.$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                echo "Login Succes";
            }else{
                echo"Invalid Email or password";
            }
        }else{
            echo"Invalid Email or password";
        }
    }

?>