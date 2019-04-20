<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svmit";

$er = (string)$_GET['er'];
$name = (string)$_GET['student'];
$branch = (string)$_GET['branch'];
$subject = (string)$_GET['subject'];

$ten = (string)$_GET['ten'];
$twenty = (string)$_GET['twenty'];
$total = (string)$_GET['total'];
$status = (string)$_GET['status'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT INTO computer(Enrollment_No,StudentName,Branch,Subject,Ten,Twenty,Total,Status) VALUES ('$er','$name','$branch','$subject','$ten','$twenty','$total','$status')";

if ($conn->query($sql) === TRUE) {
     header('Location:computer.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>