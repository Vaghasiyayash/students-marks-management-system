<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svmit";
$fname= (string)$_POST['fname'];
$branch= (string)$_POST['branch'];
$pass= (string)$_POST['pas'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT INTO fac(FacName,Branch,Password) VALUES ('$fname','$branch','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location:flogin.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>