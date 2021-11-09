<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medilog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM patient");

if (mysqli_num_rows($result) > 0) {
?>
 <table class="table text-nowrap">
    <thead>
       <tr>
        <th class="border-top-0">NIC No</th>
        <th class="border-top-0">Name</th>
        <th class="border-top-0">Phone Number</th>
        <th class="border-top-0">Address</th>
        <th class="border-top-0">Blood Group</th>
        <th class="border-top-0">Gender</th>
        <th></th>
       </tr>
    </thead>
    <tbody>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["NIC"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["ph_number"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["blood_group"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<?php 
$nic = $row["NIC"];
$name = $row["name"];
$phone = $row["ph_number"];
$address = $row["address"];
$blood = $row["blood_group"];
$gender = $row["gender"];
?>
<td><i class="fas fa-edit" onclick="updatePaitentClick('<?php echo $nic ?>','<?php echo $name ?>','<?php echo $phone ?>','<?php echo $address ?>','<?php echo $blood ?>','<?php echo $gender ?>')"></i></td>
</tr>
<?php
$i++;
}
?>
 </tbody>
</table>
<?php
}
else{
echo "No result found";
}
?>