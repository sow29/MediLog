<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$illname=$_POST['illname'];
	
	mysqli_query($conn,"update `patient_ill` set Illness_name='$illname' where ill_id='$id'");
	header('location:patientill.php');
?>