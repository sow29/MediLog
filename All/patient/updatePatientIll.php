<?php
	include('conn.php');
	$id=$_GET['id'];
     
	$illname=$_POST['ill'];
	$description=$_POST['description'];

	$getillenessID = "select ill_id from illness where name='$illname'";
	$execute = mysqli_query($conn,$getillenessID);
    
	mysqli_query($conn,"update `patient_ill` set Illness_name='$illname', description='$description' where NIC='$id'");
	header('location:patientill.php');
?>