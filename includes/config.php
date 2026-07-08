<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "yasss";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Database Connection Failed");
}

?>