<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "w3school";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $agree = $_POST['check'];
    $conn = mysqli_connect($server, $user, $pass, $db);
    $sql = "INSERT INTO `sign up` (`email`, `password`, `agree`) VALUES ('$email', $password, '$agree')";

    if($conn === FALSE){
        die("Connection failed:".$conn->mysqli_connect_error);
    }

    if($conn -> query($sql) === FALSE){
        echo "Failed:".$conn->error;
    }
    else{
        echo "Successfully";
    }

?>