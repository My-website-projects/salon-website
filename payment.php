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
    <title>Payment</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <section class="payment">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <p class="mb-0 fw-bold h4">Payment Methods</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                    aria-controls="collapseExample">
                                    <span class="fw-bold">Credit Card</span>
                                    <span class="">
                                        <span class="fab fa-cc-amex"></span>
                                        <span class="fab fa-cc-mastercard"></span>
                                        <span class="fab fa-cc-discover"></span>
                                    </span>
                                </a>
                            </p>
                            <div class="collapse show p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-5 mb-lg-0 mb-3">
                                        <?php
                                            $sql = "SELECT * from appoinment where email = '".$_SESSION['emailid']."'";
                                            $result=mysqli_query($con,$sql);
                                            if($result){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $email=$row['email'];
                                                    $service=$row['service'];
                                                    echo '<p class="h4 mb-0">Email-'.$email.'</p>';
                                                    echo '<br/>';
                                                    echo '<p class="mb-0"><span class="fw-bold">Selected Services :<br/></span><span class="c-green">'.$service.'</span> </p>';
                                                    // echo '<p class="mb-0"> <span class="fw-bold">Price:</span> <span
                                                    // class="c-green">:$452.90</span> </p>';
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="col-lg-7">
                                        <form action="" class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__div"> <input type="text" class="form-control"
                                                            placeholder=" "> <label for="" class="form__label">Card
                                                            Number</label> </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__div"> <input type="text" class="form-control"
                                                            placeholder=" "> <label for="" class="form__label">MM /
                                                            yy</label> </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__div"> <input type="password" class="form-control"
                                                            placeholder=" "> <label for="" class="form__label">cvv
                                                            code</label> </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div"> <input type="text" class="form-control"
                                                            placeholder=" "> <label for="" class="form__label">name on
                                                            the card</label> </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn btn-primary w-100">Sumbit</div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn btn-primary payment"> Make Payment </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/fontawesome/js/all.min.js"></script>

</html>