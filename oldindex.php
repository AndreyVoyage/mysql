<?php
$serverName = "localhost";
$username ="root";
$password = "";

$conn = new mysqli($serverName, $username, $password);

if (conn->connect_error) {
   die("Connection failed: " .$conn->connect_error);
}
echo "Conection susessfully";
?>