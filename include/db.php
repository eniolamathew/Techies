<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "userlogin";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("connection failed : ".mysqli_connect_error());
}
?>