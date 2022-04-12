<?php

$hostname = "localhost";
$username = "root";
$password = "";

$DBconnect = "oopCrudTest";

$conn = new mysqli($hostname, $username, $password, $DBconnect);

if ($conn->connect_error){
    echo $conn->connect_error;
}

$sql = 'SELECT * FROM student';

$result = $conn->query($sql);

if ($result -> num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['id'].' '.$row['firstName'].' '.
        $row['lastName'].' '.$row['email'].'<br>';
    }
}
else{
    echo $conn->error;
}

$conn->close();
?>
