<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $nic = $_POST['nic'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    //Database connection

    $conn = new mysqli('localhost','root','','salon');
    if($conn->connect_error){
        die('Connection Faild : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstName, lastName, email, phoneNumber, nic, password, gender) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss", $firstName, $lastName, $email, $phoneNumber, $nic, $password, $gender);
        $execval = $stmt->execute();
		echo $execval;
        echo "registration Successfuly...";
        $stmt->close();
        $conn->close();
    }

?>



