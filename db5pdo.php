<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
   $conn = new PDO("mysqli:host=$servername; dbname=testdb", $username, $password);

   $sql = "CREATE DATABASE testDB2";
   $conn->exec($sql);
   echo "Database created sucessfully";
} catch (PDOException $e) {
   echo $sql . $e->getMessage();
}


?>