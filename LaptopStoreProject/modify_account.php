<html>
<head>
	<title></title>
</head>
<body>
	<h2>Please select the username coresponding to the account that you want to modify</h2>
	<form METHOD="POST" ACTION="http://project/input_modify.php">
		<select name="Name">
			<?php
			require ("init.php");
			$q = "SELECT Username FROM login";
			$result = $conn->query($q);
			$conn->close();
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					echo '<option value='.$row["Username"].'>'.$row["Username"].'</option>';
				}
			}
			?>
		</select>
		<input type = "submit" value = "Modify">
	</form>
</body>
</html>
