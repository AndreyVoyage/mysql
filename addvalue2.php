<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)
         VALUES('Ivan', 'IVANOV' , '123444')";

         if (mysqli_query($conn, $sql)) {
            echo "Record  created";
         }
mysqli_close($conn);
?>