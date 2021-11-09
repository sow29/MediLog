<?php
	include('conn.php');
 
	$illness=$_POST['illenasname'];
 
	mysqli_query($conn,"insert into `illness` (name) values ('$illness')");
	header('location:illenas.php');
 
?>