<?php

    include "database.php";

 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient-Info</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style-re.css">
    <link rel="style" href="../css/style.css">
    <style>
        tr,td,th{

padding:20px;
color:#f9ca24;
font-size:25px;

}



.table{

border-collapse:collapse;


}

         

        input[type=text] {

            width: 230px;

            box-sizing: border-box;

            border: 2px solid yellow;

            border-radius: 4px;

            font-size: 16px;

            background-color: white;

            background-position: 10px 10px; 

            background-repeat: no-repeat;

            padding: 17px 25px 17px 45px;

            -webkit-transition: width 0.4s ease-in-out;

            transition: width 0.4s ease-in-out;

        }



        input[type=text]:focus {

            width: 50%;

        }

    </style>

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="../img/logo.png" alt="">
        <h3 class="name">MediLog</h3>
        <p class="post">Be Aware to Beware</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Enter NIC</a></li>
            <li><a href="#about">Patient-Info</a></li>
            <li><a href="#education">Patient-Allergy & Illness</a></li>
            <li><a href="#portfolio">Patient-Medication</a></li>
            <li><a href="#contact">Records</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>Dear ones !</h3>
    <h1>We're from <span>MediLog Company</span></h1>
    <p>The integriy of patients strictly maintained at all levels. i.e. Confidential & Private</p>
   
    <div id = "myForm">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <p> <label for="username">Enter NIC number: </label>
                <input type="text" name="nic" pattern="([0-9]{9}[x|X|v|V]|[0-9]{12})" placeholder="Enter NIC" width="40px" height="20px" autocomplete="off"></p>
            </p>
            <button type="submit" name="submit" class="btn"> Submit <i class="fas fa-paper-plane"></i> </button>
			        </form>
					<button onclick="window.location.href='../html/home.html'" class="btn"> Home <i class="fa fa-home" aria-hidden="true"></i></button>

    

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>Patient</span> info </h1>

<?php
							if(isset($_POST["submit"]))
							{
			
								$sql="select * from patient where NIC='{$_POST["nic"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo'
									<table border="1px">
										<tr>
					
											<th>NIC<i class="fa fa-id-card" aria-hidden="true"></i></th>
											<th>name<i class="fa fa-user" aria-hidden="true"></i></th>
											<th><i class="fa fa-phone" aria-hidden="true"></i>number</th>
											<th>address<i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>blood_group</th>
                                            <th><i class="fa fa-male" aria-hidden="true"></i>gender<i class="fa fa-female" aria-hidden="true"></i></th>
										</tr>
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$r["NIC"]}</td>
												<td>{$r["name"]}</td>
												<td>{$r["ph_number"]}</td>
												<td>{$r["address"]}</td>
												<td>{$r["blood_group"]}</td>
                                                <td>{$r["gender"]}</td>
											</tr>
										
										
										
										
										";
									}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
							}
						
						
						?>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> Patient <span>Allergy & Illness</span> </h1>
<?php
							if(isset($_POST["submit"]))
							{
			
								$sql="select * from allergy_new where NIC='{$_POST["nic"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo'
									<table border="1px">
										<tr>
					
											<th>NIC</th>
											<th>allergy_name</th>
											
										</tr>
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$r["NIC"]}</td>
												<td>{$r["Allergy_name"]}</td>
												
											</tr>
										
										
										
										
										";
									}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
							}
						
						
						?>

<?php
							if(isset($_POST["submit"]))
							{
			
								$sql="select * from patient_ill where NIC='{$_POST["nic"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo'
									<table border="1px">
										<tr>
					
											<th>NIC</th>
											<th>ill_id</th>
											<th>illness_name</th>
                                            <th>description</th>
											
										</tr>
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$r["NIC"]}</td>
												<td>{$r["ill_id"]}</td>
												<td>{$r["Illness_name"]}</td>
												<td>{$r["description"]}</td>
												
											</tr>
										
										
										
										
										";
									}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
							}
						
						
						?>


</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> Patient <span>Medication</span> </h1>

<?php
							if(isset($_POST["submit"]))
							{
			
								$sql="select * from medication_new where NIC='{$_POST["nic"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo'
									<table border="1px">
										<tr>
					
											<th>NIC</th>
											<th>Medi_name</th>
                                            <th>amount</th>
											
										</tr>
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$r["NIC"]}</td>
												<td>{$r["Medi_name"]}</td>
												<td>{$r["amount"]}</td>
												
											</tr>
										
										
										
										
										";
									}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
							}
						
						
						?>




</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>Patient</span> Records </h1>

<?php
							if(isset($_POST["submit"]))
							{
			
								$sql="select * from records_new where NIC='{$_POST["nic"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo'
									<table border="1px">
										<tr>
					
											<th>NIC</th>
											<th>Doc_name</th>
											<th>Hos_name</th>
                                            <th>Date</th>
											
										</tr>
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$r["NIC"]}</td>
												<td>{$r["Doc_name"]}</td>
												<td>{$r["Hos_name"]}</td>
												<td>{$r["Date"]}</td>
												
											</tr>
										
										
										
										
										";
									}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
							}
						
						
						?>




</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>