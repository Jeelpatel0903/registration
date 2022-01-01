<?php
include "connection.php";


    $email = $_POST['email'];
    $password = $_POST['password'];

    $chekuser = "SELECT * from reglog where email='$email' and password='$password'";
    // $result = mysqli_query($conn, $chekuser);
    if (mysqli_query($conn, $chekuser)) {
        echo 1;
    } else {
        echo 0;
    }
