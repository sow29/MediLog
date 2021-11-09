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
$sql = "UPDATE patient SET name='$name', ph_number='$phone',address='$address',blood_group='$blood',gender='$gender' WHERE NIC='$nic'";
if ($conn->query($sql) === TRUE) {
  echo "Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>