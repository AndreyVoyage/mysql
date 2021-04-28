<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

try{
$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, passwd:$password); // Не работает!!!
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql ="CREATE TABLE users3(
   name1 VARCHAR(30) NOT NULL,
   surname1 VARCHAR(30) NOT NULL PRIMARY KEY,
   password1 VARCHAR(30) NOT NULL)";

   $conn->exec($sql);
}

catch (PDOException $e) {
   echo $sql . $e->getMessage()
}

$conn = null;
?>