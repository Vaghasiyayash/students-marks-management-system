


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svmit";

$id = (string)$_GET['id'];
$er = (string)$_GET['er2'];
$name = (string)$_GET['student2'];
$branch = (string)$_GET['branch2'];
$subject = (string)$_GET['subject2'];

$ten = (string)$_GET['ten2'];
$twenty = (string)$_GET['twenty2'];
$total = (string)$_GET['total2'];
$status = (string)$_GET['status2'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "UPDATE it SET Enrollment_No='$er',StudentName='$name',Branch='$branch',Subject='$subject',Ten=$ten,Twenty='$twenty',Total='$total',Status='$status' WHERE Id=$id ";

if ($conn->query($sql) === TRUE) {
     header('Location:it.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


