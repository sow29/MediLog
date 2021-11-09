<?php
	include('conn.php');

	$ID=$_POST['patientID'];
	$illName =$_POST['illName'];
	$illID=$_POST['ill'];
	$description=$_POST['description'];
    

  	// $query = "insert into 'patient_ill' (NIC,ill_id,Illness_name,description) values('$ID','$illID','$illName','$description')";

  $query = "insert into patient_ill(NIC,ill_id,Illness_name,description) values('$ID','$illID','$illName','$description')";

 //  mysqli_query($conn,"insert into patient_ill(NIC,ill_id,Illness_name,description) values('$ID','$illID','$illName','$description')");
 // 	 echo "<script>alert('Successfuly Saved');</script>";
 // 	  header('location:patientill.php');
  	 
   

  if(mysqli_query($conn,$query)){
  	   
  	   header('location:patientill.php');
  	   echo "<script>alert('successfully saved');</script>";
  	   
  }else{
  	echo "<script>alert('Data saved error! please check and try again');</script>";
  }

   ?>

