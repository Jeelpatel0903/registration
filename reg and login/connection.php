<?php

$servername = "localhost";
$username = "jeel";
$password = "jeel";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
    die("connection faild :" .$conn->connect_error);
}
?>