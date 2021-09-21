<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form class="login" action="login.php" method="post">
  <h2>Login page</h2>
  <label>User Name</label>
  <input id="Uname" type="text" name="uname" placeholder="User Name" autocomplete="on" required>
  <br><br>
  <label>Password</label>
  <input id="Pass" type="password" name="password" placeholder="Password" required>
  <br>
  <br>
  <?php
  if ( isset( $_SESSION[ "error" ] ) ) {
    $error = $_SESSION[ "error" ];
    echo "<span style='color:red; font-size: 20px;'>$error</span>";
  }
  ?>
	<br>
	<br>
  <button id="log" type="submit">Login</button>
</form>
</body>
</html>
<?php unset($_SESSION["error"]); ?>