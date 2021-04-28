<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)
         VALUES('John', 'DOE', 'sssss66')";

if($conn->query($sql)===TRUE) {
   $last_id = $conn->insert_id;
   echo "Last id " . $last_id;
}

$conn->close();
?>