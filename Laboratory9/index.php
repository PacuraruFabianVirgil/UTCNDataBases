<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h2>Login</h2>
		<br><br>
		<form METHOD="POST" ACTION="<?=$_SERVER['PHP_SELF']?>">
		<label>Username:</label>
		<input name = "Username" type="text">
		<br><br>
		<label>Password:</label>
		<input name = "Password" type="text">
		<br><br>
		<input type = "submit">
		</form>
		<?php
			$usr = $_POST["Username"];
			$pass = $_POST["Password"];
			require ("init.php");
			$q = "SELECT * FROM login WHERE Username='$usr' AND Password='$pass'";
			$result = $conn->query($q);
			$conn->close();
			if($result->num_rows > 0) {
				header( "Location: http://lab9/main.html");
			} else if(($usr != NULL)&&($pass != NULL)) {
				echo "Invalid combination of username and password";
			}
		?>
	</center>
</body>
</html>