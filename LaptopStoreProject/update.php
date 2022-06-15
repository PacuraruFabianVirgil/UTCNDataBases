<html>
<head>
	<title></title>
</head>
<body>
	<form METHOD="POST" ACTION="update_value.php">
		<h2>Select the laptop that you want to modify</h2><br>
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
		</select><br><br>
		<h2>Select the column that you want to modify</h2><br>
		<select name="Column">
			<optgroup label="Laptop">
				<option value=1>Width</option>
				<option value=2>Height</option>
				<option value=3>Depth</option>
				<option value=4>Weigth</option>
			</optgroup>
			<optgroup label="Processor">
				<option value=5>Model</option>
				<option value=6>Core Count</option>
				<option value=7>Nominal Frequency</option>
				<option value=8>Turbo Frequency</option>
				<option value=9>Cache</option>
				<option value=10>Technology</option>
			</optgroup>
			<optgroup label="Ram">
				<option value=11>Capacity</option>
				<option value=12>Technology</option>
				<option value=13>Frequency</option>
			</optgroup>
			<optgroup label="Storage">
				<option value=14>Type</option>
				<option value=15>Capacity</option>
				<option value=16>Interface</option>
			</optgroup>
			<optgroup label="Display">
				<option value=17>Diagonal</option>
				<option value=18>Luminosity</option>
				<option value=19>Resolution</option>
				<option value=20>Format</option>
			</optgroup>
			<optgroup label="Graphics Card">
				<option value=21>Type</option>
				<option value=22>Model</option>
				<option value=23>Capacity</option>
				<option value=24>Technology</option>
			</optgroup>
		</select>
		<h2>Please input the value for the column</h2>
		<input type="text" name="Value"><br><br>
		<input type="submit" value="Modify">
	</form>
</body>
</html>