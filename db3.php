<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
   die("Connection failed:" . $conn->connect_error);
}

$sql = "CREATE DATABASE testdb";

if($conn->query($sql)===TRUE) {
   echo "Database created sucessfully";
} else {
   echo "Error" . $conn->error;
}
?>