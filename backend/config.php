<?php

    $servicename="localhost";
    $username="root";
    $password="";
    $database = "crtbank";

    $conn = mysqli_connect($servicename,$username,$password,$database);

    if($conn -> connect_error){
        die('Connection Failed: ' . $conn->connect_error);
    }
?>