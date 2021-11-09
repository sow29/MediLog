<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `patient_ill` where NIC='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Patient Illeness</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.js"></script>

<style>
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

h2 { 
  display: block;
  font-size: 1.5em;
  margin-top: 0.23em;
  margin-bottom: 0.23em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}
</style>

</head>
<body>
	
<h1 style="float:left;font-family:OCR A Std, monospace;font-size:50px;color:#FFFF00; padding=0px">Medilog</h1>
 

  <br> <br>
	<div class="container">
		<h2>Edit Patient Illness Here</h2>
		<div class="row">
	<br>
	  <div class="col-md-5">
	<form method="POST" clas="form-input" action="updatePatientIll.php?id=<?php echo $id; ?>">
		<label>Illensess name:</label>
		 <select name="ill">
             <option ><?php echo $row['Illness_name']; ?></option>
    <?php
        include ("conn.php"); 
        $records = mysqli_query($conn, "SELECT * From illness"); 

        while($data = mysqli_fetch_array($records))
        {

            echo "<option value='". $data['name'] ."'>" .$data['ill_id'] . '|' .$data['name'] ."</option>";
            
                  }	
    ?>  
    </select>
		<label>Enter New Illeness name Here :</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
		<br> <br>
		<input type="submit" name="submit" value="Update Illeness">
		<a href="patientill.php">Back</a>
	</form>

	</div>
<div class="col-md-5"> <img src ="img/ill.jpg" class = "rounded" border="5px solid #555;" alt = "Online Training" width="580px" height="400px"> </div>
</div>
</div>
</body>
</html>