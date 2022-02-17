<?php
    require("../connection/connect.php");
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
    <title>Customer Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <section>
        <div class="container">
            <button class="btn btn-primary my-5" name="addUser"><a class="text-light" style="text-decoration: none;" href="addCustomer.php">Add
                    Customer</a></button>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sl ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">NIC</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql="select * from `customer`";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $Fname=$row['Fname'];
                            $Lname=$row['Lname'];
                            $email=$row['email'];
                            $number=$row['number'];
                            $nic=$row['nic'];
                            $gender=$row['gender'];
                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$Fname.'</td>
                                <td>'.$Lname.'</td>
                                <td>'.$email.'</td>
                                <td>'.$number.'</td>
                                <td>'.$nic.'</td>
                                <td>'.$gender.'</td>
                                <td>
                                    <button class="btn btn-success" name="update"><a class="text-light" style="text-decoration: none;" href="./update/cusUpdate.php?updateid='.$id.'">Update</a></button>
                                    <button class="btn btn-danger" name="delete"><a class="text-light" style="text-decoration: none;" href="./delete/cusDelete.php?deleteid='.$id.'">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }
                ?>

                </tbody>
            </table>
        </div>
    </section>
</body>

</html>