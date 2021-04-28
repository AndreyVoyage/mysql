<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
   $conn = new PDO("mysql:host=$servername: dbname=newDB", $username, $password);
   echo "Connection sucessfully";
}
cath (PDOException $e) {
   echo "Connection failed:" . $e->getMessage();
}
?>
