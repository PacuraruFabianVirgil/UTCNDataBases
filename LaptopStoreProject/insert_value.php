<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(($_POST["Laptop_Model"]!=NULL)&&($_POST["Processor_Model"]!=NULL)&&($_POST["Ram_Capacity"]!=NULL)&&($_POST["Laptop_Width"]!=NULL)&&($_POST["Processor_Core_Count"]!=NULL)&&($_POST["Ram_Technology"]!=NULL)&&($_POST["Laptop_Height"]!=NULL)&&($_POST["Processor_Nominal_Frequency"]!=NULL)&&($_POST["Ram_Frequency"]!=NULL)&&($_POST["Laptop_Depth"]!=NULL)&&($_POST["Processor_Turbo_Frequency"]!=NULL)&&($_POST["Laptop_Weigth"]!=NULL)&&($_POST["Processor_Cache"]!=NULL)&&($_POST["Processor_Technology"]!=NULL)&&($_POST["Storage_Type"]!=NULL)&&($_POST["Display_Diagonal"]!=NULL)&&($_POST["Graphics_Card_Type"]!=NULL)&&($_POST["Storage_Capacity"]!=NULL)&&($_POST["Display_Luminosity"]!=NULL)&&($_POST["Graphics_Card_Model"]!=NULL)&&($_POST["Storage_Interface"]!=NULL)&&($_POST["Display_Resolution"]!=NULL)&&($_POST["Graphics_Card_Capacity"]!=NULL)&&($_POST["Display_Format"]!=NULL)&&($_POST["Graphics_Card_Technology"]!=NULL)){

		$Laptop_Model = $_POST["Laptop_Model"];
		$Processor_Model = $_POST["Processor_Model"];
		$Ram_Capacity = intval($_POST["Ram_Capacity"]);
		$Laptop_Width = floatval($_POST["Laptop_Width"]);
		$Processor_Core_Count = intval($_POST["Processor_Core_Count"]);
		$Ram_Technology = $_POST["Ram_Technology"];
		$Laptop_Height = floatval($_POST["Laptop_Height"]);
		$Processor_Nominal_Frequency = floatval($_POST["Processor_Nominal_Frequency"]);
		$Ram_Frequency = floatval($_POST["Ram_Frequency"]);
		$Laptop_Depth = floatval($_POST["Laptop_Depth"]);
		$Processor_Turbo_Frequency = floatval($_POST["Processor_Turbo_Frequency"]);
		$Laptop_Weigth = floatval($_POST["Laptop_Weigth"]);
		$Processor_Cache = $_POST["Processor_Cache"];
		$Processor_Technology = $_POST["Processor_Technology"];

		$Storage_Type = $_POST["Storage_Type"];
		$Display_Diagonal = floatval($_POST["Display_Diagonal"]);
		$Graphics_Card_Type = $_POST["Graphics_Card_Type"];
		$Storage_Capacity = $_POST["Storage_Capacity"];
		$Display_Luminosity = intval($_POST["Display_Luminosity"]);
		$Graphics_Card_Model = $_POST["Graphics_Card_Model"];
		$Storage_Interface = $_POST["Storage_Interface"];
		$Display_Resolution = $_POST["Display_Resolution"];
		$Graphics_Card_Capacity = intval($_POST["Graphics_Card_Capacity"]);
		$Display_Format = $_POST["Display_Format"];
		$Graphics_Card_Technology = $_POST["Graphics_Card_Technology"];

		require ("init.php");
		$q1 = "INSERT INTO laptop (Model_l, Width_l, Height_l, Depth_l, Weigth_l) VALUES ('$Laptop_Model',$Laptop_Width,$Laptop_Height,$Laptop_Depth,$Laptop_Weigth)";
		$q2 = "INSERT INTO processor (Model_p, Core_Count_p, Nominal_Frequency_p, Turbo_Frequency_p, Cache_p, Technology_p) VALUES ('$Processor_Model',$Processor_Core_Count,$Processor_Nominal_Frequency,$Processor_Turbo_Frequency,'$Processor_Cache','$Processor_Technology')";
		$q3 = "INSERT INTO ram (Capacity_r, Technology_r, Frequency_r) VALUES ($Ram_Capacity,'$Ram_Technology',$Ram_Frequency)";
		$q4 = "INSERT INTO storage (Type_s, Capacity_s, Interface_s) VALUES ('$Storage_Type','$Storage_Capacity','$Storage_Interface')";
		$q5 = "INSERT INTO display (Diagonal_d, Luminosity_d, Resolution_d, Format_d) VALUES ($Display_Diagonal,$Display_Luminosity,'$Display_Resolution','$Display_Format')";
		$q6 = "INSERT INTO graphics_card(Type_g, Model_g, Capacity_g, Technology_g) VALUES ('$Graphics_Card_Type','$Graphics_Card_Model',$Graphics_Card_Capacity,'$Graphics_Card_Technology')";
		$conn->query($q1);
		$conn->query($q2);
		$conn->query($q3);
		$conn->query($q4);
		$conn->query($q5);
		$conn->query($q6);
		$conn->close();
		require ("init.php");
		$qu1 = "SELECT Id_l FROM laptop ORDER BY Id_l DESC LIMIT 1";
		$qu2 = "SELECT Id_p FROM processor ORDER BY Id_p DESC LIMIT 1";
		$qu3 = "SELECT Id_r FROM ram ORDER BY Id_r DESC LIMIT 1";
		$qu4 = "SELECT Id_s FROM storage ORDER BY Id_s DESC LIMIT 1";
		$qu5 = "SELECT Id_d FROM display ORDER BY Id_d DESC LIMIT 1";
		$qu6 = "SELECT Id_g FROM graphics_card ORDER BY Id_g DESC LIMIT 1";
		$result1 = $conn->query($qu1);
		if($result1->num_rows > 0) {
				$row = $result1->fetch_assoc();
				$Laptop_Id = $row["Id_l"];
			}
		$result2 = $conn->query($qu2);
		if($result2->num_rows > 0) {
				$row = $result2->fetch_assoc();
				$Processor_Id = $row["Id_p"];
			}
		$result3 = $conn->query($qu3);
		if($result3->num_rows > 0) {
				$row = $result3->fetch_assoc();
				$Ram_Id = $row["Id_r"];
			}
		$result4 = $conn->query($qu4);
		if($result4->num_rows > 0) {
				$row = $result4->fetch_assoc();
				$Storage_Id = $row["Id_s"];
			}
		$result5 = $conn->query($qu5);
		if($result5->num_rows > 0) {
				$row = $result5->fetch_assoc();
				$Display_Id = $row["Id_d"];
			}
		$result6 = $conn->query($qu6);
		if($result6->num_rows > 0) {
				$row = $result6->fetch_assoc();
				$Graphics_Card_Id = $row["Id_g"];
			}
		$query1 = "INSERT INTO main (Laptop_Id, Display_Id, Processor_Id, Ram_Id, Storage_Id, Graphics_Card_Id) VALUES ($Laptop_Id,$Display_Id,$Processor_Id,$Ram_Id,$Storage_Id,$Graphics_Card_Id)";
		$query2 = "UPDATE laptop SET Availability_Id = $Laptop_Id WHERE Id_l = $Laptop_Id;";
		$conn->query($query1);
		$conn->query($query2);
		$conn->close();
		echo "<h2>Succes!</h2>";
	} else echo "<h2>Failure!</h2><h4>Make sure you give values to all areas</h4>";
	?>
</body>
</html>