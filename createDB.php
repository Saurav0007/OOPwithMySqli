<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($hostname, $username, $password);

$sql = "CREATE DATABASE oopCrudTest";
if ($conn->query($sql)){
    echo "DB Created";

}
else{
    echo $conn->error;
}

$conn->close();
?>
