<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medilog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
     $nic = $_POST['nic'];
	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $address = $_POST['address'];
     $gender = $_POST['gender'];
     $blood = $_POST['blood'];
$sql = "INSERT INTO patient (NIC, name, ph_number,address,blood_group,gender)
VALUES ('$nic', '$name', '$phone','$address','$blood','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>