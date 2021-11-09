<?php
	$id=$_GET['id'];
	include('conn.php');
	$id=$_GET['id'];
	//$description = $_GET['description'];
	mysqli_query($conn,"delete from `patient_ill` where NIC='$id'");
	header('location:patientill.php');
	//echo '$description';
?>


