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
    <title>Add Customer</title>
    <link rel="stylesheet" href="./CSS/addCustomer.css">
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
            <div class="row justify-content-md-center">
                <div class="col-sm-4">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h3 class="card-title text-white">Customers</h3>
                            <?php
                               $sql = "SELECT * from customer";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2">--> '.$rowcount1.'</h1>';
                                }
                            ?>
                            <a href="customerTable.php" class="btn btn-dark mb-3">Customer List</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h3 class="card-title text-white">Appoinments</h3>
                            <?php
                               $sql = "SELECT * from appoinment";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount2 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2">--> '.$rowcount2.'</h1>';
                                }
                            ?>
                            <a href="appoinmentTable.php" class="btn btn-dark mb-3">Appoinment List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>