<?php

    include "database.php";

 

?>




<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Records Page</title>
    <link rel="stylesheet" href="../css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

    
  <div class="wrapper">
      
    <nav class="navbar">
      <i class="fa fa-heartbeat" aria-hidden="true"></i>
      <h1 style="float:left;font-family:OCR A Std, monospace;font-size:50px;color:#ffff99;">Medilog</h1>
      <ul>
        
        <li><a href="../html/home.html">Home</a></li>
        <li><a href="../Gowthamy/index.php">Patient</a></li>
        <li><a href="../php/Allergy.php">Allergies</a></li>
        <li><a class="active" href="#">Records</a></li>
        <li><a href="../patient/patientill.php">Illness</a></li>
        <li><a href="../php/Medication.php">Medication</a></li>
      </ul>
    </nav>

  <div class="container">
    <div class="title">Records Page</div>

    <?php

if(isset($_POST["submit"]))

{

     $sq="insert into records_new(NIC,Hos_name,Doc_name,Date) values('{$_POST["nic"]}','{$_POST["hospital"]}','{$_POST["doctor"]}','{$_POST["date"]}')";

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
  $sql="select * from records_new where NIC='{$_POST["nic"]}'";

  $result=$db->query($sql);

  if($result->num_rows>0)
  {

                              

     $sq="Update records_new SET Hos_name='{$_POST["hospital"]}' , Doc_name= '{$_POST["doctor"]}' , Date='{$_POST["date"]}' WHERE NIC= '{$_POST["nic"]}'";

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
</select>
          </div>
          <div class="input-box">
            <label for="cars">Hospital</label>
    <select name="hospital" id="cars" style="width: 300px; height: 40px;" placeholder="Select Hospital" required> 











    
    <?php

$sl="select DISTINCT(name) from hospital";

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
            <label for="cars">Doctor</label>
            
    <select name="doctor" id="cars" style="width: 300px; height: 40px;" placeholder="Select Doctor" required> 
    <?php

$sl="select DISTINCT(name) from doctor";

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
            <span class="details">Last Date</span>
            <input type="date" required placeholder="Enter your date" name="date"/>
            <!--<input type="text" placeholder="Enter your number" required>-->
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
