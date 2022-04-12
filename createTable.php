<?php

$hostname = "localhost";
$username = "root";
$password = "";

$DBconnect = "oopCrudTest";
$conn = new mysqli($hostname, $username, $password, $DBconnect);

$sql = "CREATE TABLE student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName varchar(30),
    lastName varchar(30),
    email varchar (20)
    )";
if ($conn->query($sql) == true){
    echo "Table Created";

}
else{
    echo $conn->error;
}

$conn->close();
?>
