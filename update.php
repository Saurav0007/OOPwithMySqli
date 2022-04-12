<?php

$hostname = "localhost";
$username = "root";
$password = "";

$DBconnect = "oopCrudTest";
$conn = new mysqli($hostname, $username, $password, $DBconnect);

if ($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "UPDATE student SET firstName = 'saiyed' , 
lastName = 'mohammad' , 
email = 'saiyedMohammad@saurav' 
where id=1";

if ($conn->query($sql) == true) {
   echo "Data Inserted";
}
else{
    echo $conn->error;
}

$conn->close();
