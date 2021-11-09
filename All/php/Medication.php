<?php

    include "database.php";
?>
 






<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Medication Page</title>
    <link rel="stylesheet" href="../css/style-medication.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

    
  <div class="wrapper">
      
    <nav class="navbar">
    <img class="logo" src="../img/doctor.jpg">
      <i class="fa fa-heartbeat" aria-hidden="true"></i>
      
      <h1 style="float:left;font-family:OCR A Std, monospace;font-size:50px;color:#ffff99;">Medilog</h1>
      <ul>
        
        <li><a href="../html/home.html">Home</a></li>
        <li><a href="../Gowthamy/index.php">Patient</a></li>
        <li><a href="../php/Allergy.php">Allergies</a></li>
        <li><a href="../php/Records.php">Records</a></li>
        <li><a href="../patient/patientill.php">Illness</a></li>
        <li><a class="active" href="#">Medication</a></li>
      </ul>
    </nav>

  <div class="container">
    <div class="title">Medication Page</div>

    <?php

if(isset($_POST["submit"]))

{

     $sq="insert into medication_new(NIC,Medi_name,amount) values('".$_POST["hospital"]."','".$_POST["med_name"]."','".$_POST["amount"]."')";

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




<!--update code-->
<?php

if(isset($_POST["update"]))

{
  $sql="select * from medication_new where NIC='{$_POST["hospital"]}'";

  $result=$db->query($sql);

  if($result->num_rows>0)
  {

                              

     $sq="Update medication_new SET Medi_name= '{$_POST["med_name"]}' , amount='{$_POST["amount"]}' WHERE NIC= '{$_POST["hospital"]}'";

    if($db->query($sq))

    {

        echo '<script type="text/javascript">';

        echo ' alert("Update succcessfull")';  

        echo '</script>';

    }

    else

    {

        echo '<script type="text/javascript">';

        echo ' alert("Update Failed.!!")';  

         echo '</script>';

    }
  }else{
    echo '<script type="text/javascript">';

    echo ' alert("This NIC is not existing in the database!!")';  

     echo '</script>';
  }

    

    

}



?>







    <div class="content">
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">NIC Number</span>
            <select name="hospital" id="cars" style="width: 300px; height: 40px;" placeholder="Select NIC" required> 
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
</select>
          </div>
          
          










    
   

    
          <div class="input-box">
            <label for="cars">Medication Name</label>
            
    <select name="med_name" id="cars" style="width: 300px; height: 40px;" placeholder="Select Name of the Medication" required> 
    <?php

$sl="select DISTINCT(name) from medication";

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
   


    </div>
          <div class="input-box">
            <span class="details">Amount of Medication (mg)</span>
            <input type="text" required placeholder="amount of the medication" name="amount">
            <!--<input type="text" placeholder="Enter your number" required>-->
          </div>
          <div class="input-box">
          <input type = "checkbox" id = "med" name="all" value="Allergy" required>
<label for = "med"> <b>I affirm & confirm that the details of the Patient Medication mentioned above are correct.</b> </label>	
</div>
          
        </div>
        
        <div class="button">
          <input type="submit" value="Save Details" name="submit">

        </div>
        <div class="button">
          <input type="submit" value="Update Details" name="update">

        </div>
      </form>
    </div>
  </div>

  
    

</body>
</html>
