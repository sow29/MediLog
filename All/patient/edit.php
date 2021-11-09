<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `illness` where ill_id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Ill name:</label><input type="text" value="<?php echo $row['name']; ?>" name="illname">
		
		<input type="submit" name="submit">
		<a href="illenas.php">Back</a>
	</form>
</body>
</html>