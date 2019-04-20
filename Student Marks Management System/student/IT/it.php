



<!DOCTYPE html>
<html>
<head>
	<title>Data</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
	

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://editor.datatables.net/download/">
<script src="js/validate.js"></script>


</head>
<body style="background-color:;background:linear-gradient(to right,rgb(230, 238, 239) 30%,rgb(188, 205, 207) 60%) ">

   <section style="background-color:;height: 120px;width: 100%;background:linear-gradient(to right,rgb(25, 115, 151  ) 2%,rgb(34,52,76) 60%)">
         <div style="float: left;"><img src="svm.png"></div>
         <div style="margin-left:500px;color:white;background-color: ;padding-top: 20px"><p style="font-size: 2em"> Exam Management System</p></div><hr>
          
   </section>

   <section>
     <div style="float: right;"><a href="../branch.html">BACK TO BRANCH</a></div>
     <div style="float: right;"><a href="../../index.html">BACK TO HOME ||</a></div>
   </section><br><hr>


 
     <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Enrollment_No</th>
                <th>StudentName</th>
                <th>Branch</th>
                <th>Subject</th>
                <th>OutOf(10)</th>
                <th>OutOf(20)</th>
                
                <th>Total</th>

                <th>Status</th>
                
               
                
            </tr>
        </thead>
        <tbody>

      

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svmit";
$er= (string)$_POST['er'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM it WHERE Enrollment_No='$er'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
               <tr >
                 <td>'. $row["Id"].'</td>
                 <td>'. $row["Enrollment_No"]. '</td>
                 <td>'. $row["StudentName"]. '</td>
                 <td>'. $row["Branch"]. '</td>
                 <td>'. $row["Subject"]. '</td>
                 <td>'. $row["Ten"].'</td>
                 <td>'. $row["Twenty"]. '</td>
                 
                 <td>'. $row["Total"].'</td>
                 <td>'. $row["Status"].'</td>
                
                
                 
              </tr>

             
        ';
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Enrollment_No</th>
                <th>StudentName</th>
                <th>Branch</th>
                <th>Subject</th>
                <th>OutOf(10)</th>
                <th>OutOf(20)</th>
                
                <th>Total</th>

                <th>Status</th>
                
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript">
      
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>


