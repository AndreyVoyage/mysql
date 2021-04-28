<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
   die("Connection failed:" . mysql_connect_connect_error());
}

$sql = "CREATE DATABASE testdb";

if(mysqli_query($conn, $sql)) {
   echo "Database created sucessfully";
} else {
   echo "Error" . mysqli_error($conn);
}

//mysqli_close($conn); // закрыли соединение
?>