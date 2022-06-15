<?php
session_start();
?>

<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<br>
		<h2>Login</h2>
		<br>
		<form METHOD="POST" ACTION="<?=$_SERVER['PHP_SELF']?>">
		<label>Username:</label>
		<input name = "Username" type="text" placeholder="Username">
		<br><br>
		<label>Password :</label>
		<input name = "Password" type="text" placeholder="Password">
		<br><br>
		<input type = "submit">
		</form>
		<?php
			if(isset($_POST["Username"])){
				$usr = $_POST["Username"];
			} else $usr = 0;
			if(isset($_POST["Password"])){
				$pass = $_POST["Password"];
			} else $pass = 0;

			require ("init.php");
			$q = "SELECT * FROM login WHERE Username='$usr' AND Password='$pass'";
			$result = $conn->query($q);
			$conn->close();
			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$_SESSION["usr"] = $row["Username"];
				$_SESSION["pass"] = $row["Password"];
				$_SESSION["admin"] = $row["Admin"];
				header( "Location: http://project/main.html");
			} else if(($usr != NULL)&&($pass != NULL)) {
				echo "Invalid combination of username and password";
			}
		?>
	</center>
</body>
</html>