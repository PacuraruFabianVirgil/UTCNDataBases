<html>
<head>
	<title></title>
</head>
<body>
	<h2>This is the most important information out of the database</h2>
	<?php
	require ("init.php");
	$query = "SELECT * FROM ((((((main JOIN laptop ON Laptop_Id = Id_l) JOIN display ON Display_Id=Id_d) JOIN processor ON Processor_Id=Id_p) JOIN ram ON Ram_Id=Id_r) JOIN storage ON Storage_Id=Id_s) JOIN graphics_card ON Graphics_Card_Id=Id_g)";
	$result = $conn->query($query);
	$conn->close();
	echo "<table><tr>";
		echo "<th style='border: 2px solid'>Laptop Model</th>";
		echo "<th style='border: 2px solid'>Laptop Width</th>";
		echo "<th style='border: 2px solid'>Laptop Height</th>";
		echo "<th style='border: 2px solid'>Laptop Depth</th>";
		echo "<th style='border: 2px solid'>Laptop Weigth</th>";
		echo "<th style='border: 2px solid'>Processor Model</th>";
		echo "<th style='border: 2px solid'>Processor Core Count</th>";
		echo "<th style='border: 2px solid'>Processor Nominal Frequency</th>";
		echo "<th style='border: 2px solid'>Processor Turbo Frequency</th>";
		echo "<th style='border: 2px solid'>Processor Cache</th>";
		echo "<th style='border: 2px solid'>Processor Technology</th>";
		echo "<th style='border: 2px solid'>Ram Capacity</th>";
		echo "<th style='border: 2px solid'>Ram Technology</th>";
		echo "<th style='border: 2px solid'>Ram Frequency</th>";
		echo "<th style='border: 2px solid'>Storage Type</th>";
		echo "<th style='border: 2px solid'>Storage Capacity</th>";
		echo "<th style='border: 2px solid'>Storage Interface</th>";
		echo "<th style='border: 2px solid'>Display Diagonal</th>";
		echo "<th style='border: 2px solid'>Display Luminosity</th>";
		echo "<th style='border: 2px solid'>Display Resolution</th>";
		echo "<th style='border: 2px solid'>Display Format</th>";
		echo "<th style='border: 2px solid'>Graphics Card Type</th>";
		echo "<th style='border: 2px solid'>Graphics Card Model</th>";
		echo "<th style='border: 2px solid'>Graphics Card Capacity</th>";
		echo "<th style='border: 2px solid'>Graphics Card Technology</th>";
	echo "</tr>";
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td>".$row["Model_l"]."</td>";
				echo "<td>".$row["Width_l"]."</td>";
				echo "<td>".$row["Height_l"]."</td>";
				echo "<td>".$row["Depth_l"]."</td>";
				echo "<td>".$row["Weigth_l"]."</td>";
				echo "<td>".$row["Model_p"]."</td>";
				echo "<td>".$row["Core_Count_p"]."</td>";
				echo "<td>".$row["Nominal_Frequency_p"]."</td>";
				echo "<td>".$row["Turbo_Frequency_p"]."</td>";
				echo "<td>".$row["Cache_p"]."</td>";
				echo "<td>".$row["Technology_p"]."</td>";
				echo "<td>".$row["Capacity_r"]."</td>";
				echo "<td>".$row["Technology_r"]."</td>";
				echo "<td>".$row["Frequency_r"]."</td>";
				echo "<td>".$row["Type_s"]."</td>";
				echo "<td>".$row["Capacity_s"]."</td>";
				echo "<td>".$row["Interface_s"]."</td>";
				echo "<td>".$row["Diagonal_d"]."</td>";
				echo "<td>".$row["Luminosity_d"]."</td>";
				echo "<td>".$row["Resolution_d"]."</td>";
				echo "<td>".$row["Format_d"]."</td>";
				echo "<td>".$row["Type_g"]."</td>";
				echo "<td>".$row["Model_g"]."</td>";
				echo "<td>".$row["Capacity_g"]."</td>";
				echo "<td>".$row["Technology_g"]."</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>