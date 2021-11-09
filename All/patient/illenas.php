<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<div>
		<form method="POST" action="AddIllenas.php">
			<label>Illenas name:</label><input type="text" name="illenasname">
			
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Illenas tname</th>
				
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `illness`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							
							<td>
								<a href="edit.php?id=<?php echo $row['ill_id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>