<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)
         VALUES('Ivan', 'IVANOV' , '123444')";

         if (!$conn->query(sql)===TRUE) {
            echo "Record no created";
         }
$conn->close();
?>