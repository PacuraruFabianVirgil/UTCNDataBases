<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require ("init.php");
	$query = "SELECT * FROM ((((((main JOIN laptop ON Laptop_Id = Id_l) JOIN display ON Display_Id=Id_d) JOIN processor ON Processor_Id=Id_p) JOIN ram ON Ram_Id=Id_r) JOIN storage ON Storage_Id=Id_s) JOIN graphics_card ON Graphics_Card_Id=Id_g)";
	$result = $conn->query($query);
	$conn->close();
	echo "<table><tr>";
	if(isset($_POST["Laptop_Model"])){
		echo "<th style='border: 2px solid'>Laptop Model</th>";
	}
	if(isset($_POST["Laptop_Width"])){
		echo "<th style='border: 2px solid'>Laptop Width</th>";
	}
	if(isset($_POST["Laptop_Height"])){
		echo "<th style='border: 2px solid'>Laptop Height</th>";
	}
	if(isset($_POST["Laptop_Depth"])){
		echo "<th style='border: 2px solid'>Laptop Depth</th>";
	}
	if(isset($_POST["Laptop_Weigth"])){
		echo "<th style='border: 2px solid'>Laptop Weigth</th>";
	}
	if(isset($_POST["Processor_Model"])){
		echo "<th style='border: 2px solid'>Processor Model</th>";
	}
	if(isset($_POST["Processor_Core_Count"])){
		echo "<th style='border: 2px solid'>Processor Core Count</th>";
	}
	if(isset($_POST["Processor_Nominal_Frequency"])){
		echo "<th style='border: 2px solid'>Processor Nominal Frequency</th>";
	}
	if(isset($_POST["Processor_Turbo_Frequency"])){
		echo "<th style='border: 2px solid'>Processor Turbo Frequency</th>";
	}
	if(isset($_POST["Processor_Cache"])){
		echo "<th style='border: 2px solid'>Processor Cache</th>";
	}
	if(isset($_POST["Processor_Technology"])){
		echo "<th style='border: 2px solid'>Processor Technology</th>";
	}
	if(isset($_POST["Ram_Capacity"])){
		echo "<th style='border: 2px solid'>Ram Capacity</th>";
	}
	if(isset($_POST["Ram_Technology"])){
		echo "<th style='border: 2px solid'>Ram Technology</th>";
	}
	if(isset($_POST["Ram_Frequency"])){
		echo "<th style='border: 2px solid'>Ram Frequency</th>";
	}
	if(isset($_POST["Storage_Type"])){
		echo "<th style='border: 2px solid'>Storage Type</th>";
	}
	if(isset($_POST["Storage_Capacity"])){
		echo "<th style='border: 2px solid'>Storage Capacity</th>";
	}
	if(isset($_POST["Storage_Interface"])){
		echo "<th style='border: 2px solid'>Storage Interface</th>";
	}
	if(isset($_POST["Display_Diagonal"])){
		echo "<th style='border: 2px solid'>Display Diagonal</th>";
	}
	if(isset($_POST["Display_Luminosity"])){
		echo "<th style='border: 2px solid'>Display Luminosity</th>";
	}
	if(isset($_POST["Display_Resolution"])){
		echo "<th style='border: 2px solid'>Display Resolution</th>";
	}
	if(isset($_POST["Display_Format"])){
		echo "<th style='border: 2px solid'>Display Format</th>";
	}
	if(isset($_POST["Graphics_Card_Type"])){
		echo "<th style='border: 2px solid'>Graphics Card Type</th>";
	}
	if(isset($_POST["Graphics_Card_Model"])){
		echo "<th style='border: 2px solid'>Graphics Card Model</th>";
	}
	if(isset($_POST["Graphics_Card_Capacity"])){
		echo "<th style='border: 2px solid'>Graphics Card Capacity</th>";
	}
	if(isset($_POST["Graphics_Card_Technology"])){
		echo "<th style='border: 2px solid'>Graphics Card Technology</th>";
	}
	echo "</tr>";
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			if(isset($_POST["Laptop_Model"])){
				echo "<td>".$row["Model_l"]."</td>";
			}
			if(isset($_POST["Laptop_Width"])){
				echo "<td>".$row["Width_l"]."</td>";
			}
			if(isset($_POST["Laptop_Height"])){
				echo "<td>".$row["Height_l"]."</td>";
			}
			if(isset($_POST["Laptop_Depth"])){
				echo "<td>".$row["Depth_l"]."</td>";
			}
			if(isset($_POST["Laptop_Weigth"])){
				echo "<td>".$row["Weigth_l"]."</td>";
			}
			if(isset($_POST["Processor_Model"])){
				echo "<td>".$row["Model_p"]."</td>";
			}
			if(isset($_POST["Processor_Core_Count"])){
				echo "<td>".$row["Core_Count_p"]."</td>";
			}
			if(isset($_POST["Processor_Nominal_Frequency"])){
				echo "<td>".$row["Nominal_Frequency_p"]."</td>";
			}
			if(isset($_POST["Processor_Turbo_Frequency"])){
				echo "<td>".$row["Turbo_Frequency_p"]."</td>";
			}
			if(isset($_POST["Processor_Cache"])){
				echo "<td>".$row["Cache_p"]."</td>";
			}
			if(isset($_POST["Processor_Technology"])){
				echo "<td>".$row["Technology_p"]."</td>";
			}
			if(isset($_POST["Ram_Capacity"])){
				echo "<td>".$row["Capacity_r"]."</td>";
			}
			if(isset($_POST["Ram_Technology"])){
				echo "<td>".$row["Technology_r"]."</td>";
			}
			if(isset($_POST["Ram_Frequency"])){
				echo "<td>".$row["Frequency_r"]."</td>";
			}
			if(isset($_POST["Storage_Type"])){
				echo "<td>".$row["Type_s"]."</td>";
			}
			if(isset($_POST["Storage_Capacity"])){
				echo "<td>".$row["Capacity_s"]."</td>";
			}
			if(isset($_POST["Storage_Interface"])){
				echo "<td>".$row["Interface_s"]."</td>";
			}
			if(isset($_POST["Display_Diagonal"])){
				echo "<td>".$row["Diagonal_d"]."</td>";
			}
			if(isset($_POST["Display_Luminosity"])){
				echo "<td>".$row["Luminosity_d"]."</td>";
			}
			if(isset($_POST["Display_Resolution"])){
				echo "<td>".$row["Resolution_d"]."</td>";
			}
			if(isset($_POST["Display_Format"])){
				echo "<td>".$row["Format_d"]."</td>";
			}
			if(isset($_POST["Graphics_Card_Type"])){
				echo "<td>".$row["Type_g"]."</td>";
			}
			if(isset($_POST["Graphics_Card_Model"])){
				echo "<td>".$row["Model_g"]."</td>";
			}
			if(isset($_POST["Graphics_Card_Capacity"])){
				echo "<td>".$row["Capacity_g"]."</td>";
			}
			if(isset($_POST["Graphics_Card_Technology"])){
				echo "<td>".$row["Technology_g"]."</td>";
			}
			echo "</tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>