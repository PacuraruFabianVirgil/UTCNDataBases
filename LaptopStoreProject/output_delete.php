<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST["Name"])){
		require ("init.php");
		$name = $_POST["Name"];
		$query1 = "SELECT * FROM main WHERE Laptop_Id=$name";
		$result = $conn->query($query1);
		if($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$Display_Id = $row["Display_Id"];
			$Processor_Id = $row["Processor_Id"];
			$Ram_Id = $row["Ram_Id"];
			$Storage_Id = $row["Storage_Id"];
			$Graphics_Card_Id = $row["Graphics_Card_Id"];
		}
		$query2 = "DELETE FROM main WHERE Laptop_Id=$name";
		$query3 = "DELETE FROM laptop WHERE Id_l=$name";
		$query4 = "DELETE FROM display WHERE Id_d=$Display_Id";
		$query5 = "DELETE FROM processor WHERE Id_p=$Processor_Id";
		$query6 = "DELETE FROM ram WHERE Id_r=$Ram_Id";
		$query7 = "DELETE FROM storage WHERE Id_s=$Storage_Id";
		$query8 = "DELETE FROM graphics_card WHERE Id_g=$Graphics_Card_Id";
		$conn->query($query2);
		$conn->query($query3);
		$conn->query($query4);
		$conn->query($query5);
		$conn->query($query6);
		$conn->query($query7);
		$conn->query($query8);
		$conn->close();
		echo "<h2>Succes!</h2>";
	} else echo "<h2>Failure!</h2>";
	?>
</body>
</html>