<html>
<head>
	<title></title>
</head>
<body>
	<form METHOD="POST" ACTION="output_modify.php">
		<?php
		require ("init.php");
		$name = $_POST["Name"];
		$q = "SELECT * FROM login WHERE Username='$name'";
		$result = $conn->query($q);
		if($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$pass = $row["Password"];
			$admin = $row["Admin"];
		}
		echo "<label>Password: </label><input type='text' name='Password' placeholder='$pass'><br><br>";
		if($admin==1){
			echo "<label>Admin: </label><input type='checkbox' name='Admin' checked><br><br>";
		}else{
			echo "<label>Admin: </label><input type='checkbox' name='Admin'><br><br>";
		}
		echo "<input type='hidden' name='initName' value='$name' />";
		?>
	<input type = "submit">
	</form>
</body>
</html>