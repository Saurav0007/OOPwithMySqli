<?php

$hostname = "localhost";
$username = "root";
$password = "";

$DBconnect = "oopCrudTest";
$conn = new mysqli($hostname, $username, $password, $DBconnect);

if ($conn->connect_error){
    echo $conn->connect_error;
}
 $sql =   "DELETE FROM student WHERE id = 1";

    if ( $conn->query($sql) == true) {
        echo "Data Deleted";
    }
    else{
        echo $conn->error;
    }

$conn->close();
?>
