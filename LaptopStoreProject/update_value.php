<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST["Value"])){
		require ("init.php");
		$Laptop_Id = $_POST["Name"];
		$value = $_POST["Value"];
		$q = "SELECT * FROM main WHERE Laptop_Id=$Laptop_Id";
		$result = $conn->query($q);
		if($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$Display_Id = $row["Display_Id"];
			$Processor_Id = $row["Processor_Id"];
			$Ram_Id = $row["Ram_Id"];
			$Storage_Id = $row["Storage_Id"];
			$Graphics_Card_Id = $row["Graphics_Card_Id"];
		}
		switch ($_POST["Column"]) {
			case 1:
				$query = "UPDATE laptop SET Width_l = '$value' WHERE Id_l = '$Laptop_Id';";
				break;
			case 2:
				$query = "UPDATE laptop SET Height_l = '$value' WHERE Id_l = '$Laptop_Id';";
				break;
			case 3:
				$query = "UPDATE laptop SET Depth_l = '$value' WHERE Id_l = '$Laptop_Id';";
				break;
			case 4:
				$query = "UPDATE laptop SET Weigth_l = '$value' WHERE Id_l = '$Laptop_Id';";
				break;
			case 5:
				$query = "UPDATE processor SET Model_p = '$value' WHERE Id_p = '$Processor_Id';";
				break;
			case 6:
				$query = "UPDATE processor SET Core_Count_p = '$value' WHERE Id_p = '$Processor_Id';";
				break;
			case 7:
				$query = "UPDATE processor SET Nominal_Frequency_p = '$value' WHERE Id_p = '$Processor_Id';";
				break;
			case 8:
				$query = "UPDATE processor SET Turbo_Frequency_p = '$value' WHERE Id_p = '$Processor_Id';";
				break;
			case 9:
				$query = "UPDATE processor SET Cache_p = '$value' WHERE Id_p = '$Processor_Id';";
				break;
			case 10:
				$query = "UPDATE processor SET Technology_p = '$value' WHERE Id_p = '$Processor_Id';";
				break;
			case 11:
				$query = "UPDATE ram SET Capacity_r = '$value' WHERE Id_r = '$Ram_Id';";
				break;
			case 12:
				$query = "UPDATE ram SET Technology_r = '$value' WHERE Id_r = '$Ram_Id';";
				break;
			case 13:
				$query = "UPDATE ram SET Frequency_r = '$value' WHERE Id_r = '$Ram_Id';";
				break;
			case 14:
				$query = "UPDATE storage SET Type_s = '$value' WHERE Id_s = '$Storage_Id';";
				break;
			case 15:
				$query = "UPDATE storage SET Capacity_s = '$value' WHERE Id_s = '$Storage_Id';";
				break;
			case 16:
				$query = "UPDATE storage SET Interface_s = '$value' WHERE Id_s = '$Storage_Id';";
				break;
			case 17:
				$query = "UPDATE display SET Diagonal_d = '$value' WHERE Id_d = '$Display_Id';";
				break;
			case 18:
				$query = "UPDATE display SET Luminosity_d = '$value' WHERE Id_d = '$Display_Id';";
				break;
			case 19:
				$query = "UPDATE display SET Resolution_d = '$value' WHERE Id_d = '$Display_Id';";
				break;
			case 20:
				$query = "UPDATE display SET Format_d = '$value' WHERE Id_d = '$Display_Id';";
				break;
			case 21:
				$query = "UPDATE graphics_card SET Type_g = '$value' WHERE Id_g = '$Graphics_Card_Id';";
				break;
			case 22:
				$query = "UPDATE graphics_card SET Model_g = '$value' WHERE Id_g = '$Graphics_Card_Id';";
				break;
			case 23:
				$query = "UPDATE graphics_card SET Capacity_g = '$value' WHERE Id_g = '$Graphics_Card_Id';";
				break;
			case 24:
				$query = "UPDATE graphics_card SET Technology_g = '$value' WHERE Id_g = '$Graphics_Card_Id';";
				break;
		}
		$conn->query($query);
		$conn->close();
		echo "<h2>Succes!</h2>";
	} else echo "<h2>Failure!</h2><h4>Please input a value to modify the database</h4>";
	?>
</body>
</html>