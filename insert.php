<?php
include "connection.php";

    $name = $_POST['fname'];
    $email = $_POST['Email'];
    $userid = $_POST['Userid'];
    $password = $_POST['Password'];

    $chekuser = "SELECT * from reglog where email = '$email'";
    $result = mysqli_query($conn, $chekuser);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "alreay exist";
    } else
        $sql = "INSERT INTO `reglog`( `name`, `email`, `userName`, `password`) 
        VALUES ('$name','$email','$userid','$password')";

    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 0;
    }