<?php
    $con =  mysqli_connect("localhost","root", "", "crud");
    if($con == false){
        die("connection error".mysqli_connect_error());
    }
?>
