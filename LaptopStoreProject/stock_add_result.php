<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if (($_POST["Value_Stock"]!=NULL)&&($_POST["Value_Price"]!=NULL)) {
			$stock=$_POST["Value_Stock"];
			$price=$_POST["Value_Price"];
			$id = $_POST["Id"];
			$store = $_POST["Store"];
			require ("init.php");
			$q = "SELECT * FROM availability WHERE Deposit_Id=$store";
			$result = $conn->query($q);
			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$name = $row["Store_Name"];
				$bigger = $row["Bigger_Deposit_Id"];
				echo $name.$bigger;
			}
			$query = "INSERT INTO availability (Id, Store_Name, Deposit_Id, Price, Stock, Bigger_Deposit_Id) VALUES ($id,'$name',$store,$price,$stock,$bigger);";
			$conn->query($query);
			$conn->close();
			echo "<h2>Succes!</h2>";
		} else {
			echo "<h2>Failure!</h2>";
			echo "<h2>Please complete all fields</h2>";
		}
	?>
</body>
</html>