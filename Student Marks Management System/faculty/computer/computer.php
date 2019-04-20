



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

 <form action="centry.php" name="form" id="form" method="get" onsubmit="return(validate());" style="display: inline-block;height: 300px;width: 500px;">
          <table>
              <tr>
                <td colspan="2" style="text-align: center;font-weight: bold;font-size: 1.5em">New Record</td>
              </tr>
              <tr>
                  <td>Enrollment No:</td>
                  <td><input type="number" name="er" id="er"></td>
              </tr>
              <tr>
                  <td>Student Name:</td>
                  <td><input type="text" name="student" id="st"></td>
              </tr>
              <tr>
                  <td>sem & Branch</td>
                  <td>
                      <select name="branch" id="barnch">
                          <option value="-1" selected>[choose yours]</option>
                          <option>sem-1 computer(2018)</option>
                          <option>sem-2 computer(2018)</option>
                          <option>sem-3 computer(2018)</option>
                          <option>sem-4 computer(2018)</option>
                          <option>sem-5 computer(2018)</option>
                          <option>sem-6 computer(2018)</option>
                          <option>sem-7 computer(2018)</option>
                          <option>sem-8 computer(2018)</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Subject</td>
                  <td>
                      <select name="subject" id="subject">
                         <option value="-1" selected>[choose yours]</option>
                         <option>Advance java(AJ)</option>
                         <option>Theory of computation(TOC)</option>
                         <option>Web technology(WT)</option>
                         <option>.NET</option>
                         <option>Compter graphics(CG)</option>
                         <option>Design engineering(DE)</option>
                          
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Out of 10:</td>
                  <td><input type="text" name="ten" id="ten" onchange="calculations()"></td>
              </tr>
              <tr>
                  <td>Out of 20:</td>
                  <td><input type="text" name="twenty" id="twenty" onchange="calculations()"></td>
              </tr>
              <tr>
                  <td>Total</td>
                  <td><input type="text" name="total" id="total"></td>
              </tr>
              <tr>
                  <td>Statu</td>
                  <td><input type="text" name="status" id="status"></td>
              </tr>

              <tr>
                  <td></td>
                  <td>
                      <input type="submit" name="submit" value="submit">
                      <input type="reset" name="reset" value="reset">
                  </td>
              </tr>
              
          </table>
      </form>


      <form action="cupdate.php" name="form2" id="form2" method="get" onsubmit="return(validate1());" style="display: inline-block;height: 300px;width: 500px;">
          <table>
             <tr>
                <td colspan="2" style="text-align: center;font-weight: bold;font-size: 1.5em">Update Record</td>
              </tr>

            <tr>
                 <td>ID</td>
                 <td><input type="number" name="id" value="<?php echo $_GET['Id']; ?>"></td>
            </tr>  
              <tr>
                  <td>Enrollment No:</td>
                  <td><input type="text" name="er2" id="er2" value="<?php echo $_GET['Enrollment_No']; ?>"></td>
              </tr>
              <tr>
                  <td>Student Name:</td>
                  <td><input type="text" name="student2" id="st2" value="<?php echo $_GET['StudentName']; ?>"></td>
              </tr>
              <tr>
                  <td>sem & Branch</td>
                  <td>
                      <select name="branch2" id="barnch2" value="<?php echo $_GET['Branch']; ?>">
                          <option value="-1" selected>[choose yours]</option>
                          <option>sem-1 computer(2018)</option>
                          <option>sem-2 computer(2018)</option>
                          <option>sem-3 computer(2018)</option>
                          <option>sem-4 computer(2018)</option>
                          <option>sem-5 computer(2018)</option>
                          <option>sem-6 computer(2018)</option>
                          <option>sem-7 computer(2018)</option>
                          <option>sem-8 computer(2018)</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Subject</td>
                  <td>
                      <select name="subject2" id="subject2" value="<?php echo $_GET['Subject']; ?>">
                         <option value="-1" selected>[choose yours]</option>
                         <option>Advance java(AJ)</option>
                         <option>Theory of computation(TOC)</option>
                         <option>Web technology(WT)</option>
                         <option>.NET</option>
                         <option>Compter graphics(CG)</option>
                         <option>Design engineering(DE)</option>
                          
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Out of 10:</td>
                  <td><input type="text" name="ten2" id="ten2" onchange="calculations1()" value="<?php echo $_GET['Ten']; ?>"></td>
              </tr>
              <tr>
                  <td>Out of 20:</td>
                  <td><input type="text" name="twenty2" id="twenty2" onchange="calculations1()" value="<?php echo $_GET['Twenty']; ?>"></td>
              </tr>
              <tr>
                  <td>Total</td>
                  <td><input type="text" name="total2" id="total2" value="<?php echo $_GET['Total']; ?>" ></td>
              </tr>
              <tr>
                  <td>Statu</td>
                  <td><input type="text" name="status2" id="status2" value="<?php echo $_GET['Status']; ?>"></td>
              </tr>

              <tr>
                  <td></td>
                  <td>
                      <input type="submit" name="submit" value="submit">
                      <input type="reset" name="reset" value="reset">
                  </td>
              </tr>
              
          </table>
      </form>



      <form action="cdelete.php" name="form3" id="form3" method="get"  style="display: inline-block;height: 300px;width: 200px;">
          <table>
             <tr>
                <td colspan="2" style="text-align: center;font-weight: bold;font-size: 1.5em">Delete Record</td>
              </tr>
            <tr>
                 <td>ID</td>
                 <td><input type="number" name="id2" value="<?php echo $_GET['Id']; ?>"></td>
            </tr> 

            <tr>
                  <td></td>
                  <td>
                      <input type="submit"  value="DELETE">
                      
                  </td>
              </tr>
      </table>
      </form>
 
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
                <th>Editing</th>
               
                
            </tr>
        </thead>
        <tbody>

      

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svmit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM computer ";
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
                
                <td style="width:200px">
                      <a style="text-decoration:none" 
                            href="computer.php?Id='.$row["Id"].'&Enrollment_No='.$row["Enrollment_No"].' &StudentName='.$row["StudentName"].'&Branch='.$row["Branch"].'&Subject='.$row["StudentName"].' &Ten='.$row["Ten"].' &Twenty='.$row["Twenty"].' &Total='.$row["Total"].' &Status='.$row["Status"].'" >
                            <button>UPDATE || DELETE</button> 

                        </a>

                        

                         
                        


                      
                  </td>

                 
                 
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
                <th>Editing</th>
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


