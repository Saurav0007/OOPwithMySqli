<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($hostname, $username, $password);

if ($conn->connect_error){
    echo $conn->connect_error;

}

$conn->close();
?>
