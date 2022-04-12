<?php

$hostname = "localhost";
$username = "root";
$password = "";

$DBconnect = "oopCrudTest";
$conn = new mysqli($hostname, $username, $password, $DBconnect);

if ($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "INSERT INTO student(firstName, lastName, email) VALUES('Mohammad2', 'Saura2', 'mohammadsaurav2@gmail.com')";
if ($conn->query($sql) == true) {
   echo "Data Inserted";
}
else{
    echo $conn->error;
}

$conn->close();
?>
