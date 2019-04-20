


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svmit";

$id = (string)$_GET['id2'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM computer
WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
	
     header('Location:computer.php');



} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


