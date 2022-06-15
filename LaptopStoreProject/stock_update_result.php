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
			$query = "UPDATE availability SET Price=$price, Stock=$stock WHERE Id=$id AND Deposit_Id=$store;";
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