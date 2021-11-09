<!DOCTYPE html>
<html>
<head>
<title>Patient Database</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.js"></script>

<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');

.wrapper{
	
}
.navbar{
	position: fixed;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.4);
}
.navbar .logo{
	width: 90px;
	height: 80px;
	padding: 20px 90px;
	-webkit-transition: -webkit-transform 1s;
  top: -50px;
}
.navbar .logo:hover{
	-webkit-transform: rotate(360deg) translateZ(0);
}

.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 6px 13px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background: red;
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
}

.center .buttons{
	margin: 35px 280px;
	
}

.column {
  float: left;
  width: 65%;
  padding: 65px;
}

.buttons button{
	height: 50px;
	width: 150px;
	font-size: 18px;
	font-weight: 600;
	color: #ffb3b3;
	background: red;
	outline: none;
	cursor: pointer;
	border: 1px solid #cc0000;
	border-radius: 25px;
	transition: .4s;
	position: center;
	-webkit-transition: -webkit-transform 1s;
}



* {
  box-sizing: border-box;
}




body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('img/virus.jpg');
  background-repeat: no-repeat;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}







input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
#myInput {
  background-image: url('img/search');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>

</head>
<body bgcolor="">


<div class="wrapper">
      
      <nav class="navbar">
      
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <h1 style="float:left;font-family:OCR A Std, monospace;font-size:50px;color:#FFFF00; padding=0px">Medilog</h1>
        <ul>
          
          <li><a href="../html/home.html">Home</a></li>
          <li><a href="../Gowthamy/index.php">Patient</a></li>
          <li><a href="../php/Allergy.php">Allergies</a></li>
          <li><a href="../php/Records.php">Records</a></li>
          <li><a class="active" href="#">Illness</a></li>
          <li><a href="../php/Medication.php">Medication</a></li>
        </ul>
      </nav>
</div>

<br>
	<div class="container">
	
		<form method="POST" action="AddPatientIllenas.php" class="form-group">
	  <div class="row">
	  	<div class="col-md-5">
			<label>Add patient ID:</label>
			
               <select name="patientID" class="form-control" required="true">
             <option >-- Select Patient ID and Name --</option>
    <?php
        include ("conn.php"); 
        $records = mysqli_query($conn, "SELECT * From patient"); 

        while($data = mysqli_fetch_array($records))
        {

            echo "<option value='". $data['NIC'] ."'>" .$data['NIC'] . '|' .$data['name'] ."</option>";
            
                  }	
    ?>  
    </select>
          
			<br>

			<label>Illness name:</label>

    <select name="ill" required="true">
             <option >-- Select Illeness --</option>
    <?php
        include ("conn.php"); 
        $records = mysqli_query($conn, "SELECT * From illness"); 

        while($data = mysqli_fetch_array($records))
        {

            echo "<option value='". $data['ill_id'] ." '>" .$data['ill_id'] . '|' .$data['name'] ."</option>";
            
                  }	
    ?>  
    </select>
    <br>
    <label> Please Re-enter your illness: </label><input type="text" value="" name="illName" required="true">
     <br>
			<label>Description:</label><textarea id="description" name="description" placeholder="Please describe" style="height: 75px;"> </textarea> <br>
			<input type="submit" value="Save patient illness">
			
		</form> </div>
	
	<br>
	<div class="col-md-7">
		<br><br>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for anything.." title="Type in a name">
		<table border="1" class="table table-striped" id="myTable">
			<thead>
				<th>ILL ID</th>
				<th>NIC</th>
				<th>Illness name</th>
				<th>Description</th>

				<th>Action</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `patient_ill`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['ill_id']; ?></td>
							<td><?php echo $row['NIC']; ?></td>
							<td><?php echo $row['Illness_name']; ?></td>
							<td><?php echo $row['description']; ?></td>
							
							<td>
								<a href="editPatientIll.php?id=<?php echo $row['NIC']; ?>" onclick="editbuttonFunction()">Edit</a>
								<a href="delete.php?id=<?php echo $row['NIC']; ?>" onclick="buttonFunction()">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
	</div>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function buttonFunction() {
 alert('Are you sure you want to delete!');
}

function editbuttonFunction() {
 alert('Are you sure you want to edit!');
}

</script>

</body>
</html>