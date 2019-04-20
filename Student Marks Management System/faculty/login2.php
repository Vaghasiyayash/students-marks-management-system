<?php

echo' <html>
<head>
	<title>flogin</title>
  <link rel="stylesheet" type="text/css" href="logc.css">
  <script src="val.js"></script>
</head>
<body >

   <section style="background-color:;height: 120px;width: 100%;background:linear-gradient(to right,rgb(25, 115, 151  ) 2%,rgb(34,52,76) 60%)">
         <div style="float: left;"><img src="svm.png"></div>
         <div style="margin-left:500px;color:white;background-color: ;padding-top: 20px"><p style="font-size: 2em"> Exam Management System</p></div><hr>
       
   </section><br>

   
';

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

$sql ="SELECT * FROM fac WHERE FacName='$fname' AND Branch='$branch' AND Password='$pass' ";

if ($conn->query($sql)->num_rows > 0) {

	session_start();
 
// Storing session data
$_SESSION["FacName"] = $fname;
$_SESSION["Branch"] = $branch;
$_SESSION["Password"] = $pass;
    echo "you are login successfully";
    header("Location:branch.html");

} else {
    echo "<center><font style='font-size:3em;color:red'>Something Worng</font>
           <p>please login again correctly otherwise siging first</p>" ;
}

$conn->close();
?>