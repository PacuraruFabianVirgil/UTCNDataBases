<html>
<head>
	<title></title>
</head>
<body>
	<form METHOD="POST" ACTION="modify_stock.php">
		<h2>Select the laptop for which you want to update a stock into a store</h2><br>
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
		<input type="submit">
	</form>
</body>
</html>