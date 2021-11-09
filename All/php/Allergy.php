<?php

    include "database.php";

 

?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Allergies Page </title>
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
	width: 140px;
	height: 100px;
	padding: 20px 100px;
	-webkit-transition: -webkit-transform 1s;
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

.buttons button:hover{
	background: #cc0000;
	-webkit-transform: rotate(360deg) translateZ(0);
}

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
h1
{
  color:#16E2F5;
  }

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("../img/home.jpg");

  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 60px;
  max-width: 400px;
  padding: 22px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 60%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6f;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
select{
	width: 80%;
	border: 1px solid brown;
	border-radius: 05px;
	box-shadow:1px 1px 2px 1px grey;
	padding: 10px 15px 10px;
}
.txt{
width: 60%;
height: 5%;
border: 1px solid brown;
border-radius: 05px;
padding:20px 15px 20px 15px;
margin: 10px 0px 15px 0px;
}
</style>
</head>
<body>

<div class="wrapper">
      
      <nav class="navbar">
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <h1 style="float:left;font-family:OCR A Std, monospace;font-size:50px;color:#e8135a; padding=0px">Medilog</h1>
        <ul>
          
          <li><a href="../html/home.html">Home</a></li>
          <li><a href="../Gowthamy/index.php">Patient</a></li>
          <li><a class="active" href="#">Allergies</a></li>
          <li><a href="../php/Records.php">Records</a></li>
          <li><a href="../patient/patientill.php">Illness</a></li>
          <li><a href="../php/Medication.php">Medication</a></li>
        </ul>
      </nav>
</div>

<?php

if(isset($_POST["insert"]))

{

     $sq="insert into allergy_new(NIC,Allergy_name) values('{$_POST["nic"]}','{$_POST["allname"]}')";

    if($db->query($sq))

    {

        echo '<script type="text/javascript">';

        echo ' alert("Insert succcessfull")';  

        echo '</script>';

    }

    else

    {

        echo '<script type="text/javascript">';

        echo ' alert("Insert Failed.!!")';  

         echo '</script>';

    }

    

    

}



?>




<div class="bg-img">
<div class="row">
    <div class="column">
      <img src="../img/doctor.jpg" alt="Snow" style="width:100%" >
    </div>






<p>


<form method="post" class="container" action="<?php echo $_SERVER["PHP_SELF"];?>">


<h1>Patient Allergy Details</h1>
<img src="../img/logo.png" alt="Computer man" style="width:48px;height:48px;">


   <p><label> NIC Number:</label> 
   <select name="nic" id="cars" style="width: 300px; height: 40px;" placeholder="Select NIC" required> 
   <?php

$sl="select * from patient";

$r=$db->query($sl);

if($r->num_rows>0)

{

    echo    "<option value=''>Select</option>";

while($ro=$r->fetch_assoc())

{

  echo "<option value='{$ro["NIC"]}'>{$ro["NIC"]} - {$ro["name"]}</option>";

}



}

?>
</select><br> 
   
</p>
     <p>
    <label for="name">Choose a Allergy Name:</label>

<select name="allname" id="Allergy" required>


<?php

$sl="select DISTINCT(name) from allergies";

$r=$db->query($sl);	

if($r->num_rows>0)

{

    echo    "<option value=''>Select</option>";

while($ro=$r->fetch_assoc())

{

    echo "<option value='{$ro["name"]}'>{$ro["name"]}</option>";

}



}

?>

 
</select>
<p>
<input type = "checkbox" id = "med" name="all" value="Allergy" required>
<label for = "med"> <b>I confirm that the details of the Patient Allergy mentioned above are true.</b> </label>	














 
</select>
</P>
</p>

  <input type="submit" class="txt" name="insert" value="INSERT DATA">
</p>  
  </form>
</p>
</div>


</body>
</html>

	
