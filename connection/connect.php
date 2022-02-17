<?php
    $con=new mysqli('localhost','root','','salon');

    if(!$con){
        die(mysqli_error($con));
    }
?>