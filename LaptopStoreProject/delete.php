<html>
<head>
	<title></title>
</head>
<body>
	<h2>Please select the model of the laptop that you want to delete</h2>
	<form METHOD="POST" ACTION="output_delete.php">
		<select name="Name">
		<?php
		require ("init.php");
		$q = "SELECT * FROM laptop";
		$result = $conn->query($q);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo '<option value='.$row["Id_l"].'>'.$row["Model_l"].'</option>';
			}
		}
		$conn->close();
		?>
		</select>
		<input type = "submit" value = "Delete">
	</form>
</body>
</html>