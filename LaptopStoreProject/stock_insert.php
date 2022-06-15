<html>
<head>
	<title></title>
</head>
<body>
	<form METHOD="POST" ACTION="stock_add_result.php">
		<?php
		require ("init.php");
		$id = $_POST["Name"];
		$q = "SELECT * FROM availability WHERE Deposit_Id NOT IN (SELECT Deposit_Id FROM availability WHERE Id=$id) GROUP BY Store_Name";
		$result = $conn->query($q);
		if($result->num_rows > 0) {
			echo "<h2>Select the store in which you want to insert a stock</h2><br>";
			echo "<select name='Store'>";
			while($row = $result->fetch_assoc()){
				echo '<option value='.$row["Deposit_Id"].'>'.$row["Store_Name"].'</option>';
			}
			echo "</select><br><br>";
			echo "<label>Stock value: </label><input type='text' name='Value_Stock'><br><br>";
			echo "<label>Price value: </label><input type='text' name='Value_Price'><br><br>";
			echo "<input type='hidden' name='Id' value=$id>";
			echo "<input type='submit' value='Add'>";
		} else {
			echo "<h2>All stores have set Value and Price for this laptop model</h2>";
			echo "<h2>Go to UPDATE STOCK to update them</h2>";
		}
		$conn->close();
		?>
	</form>
</body>
</html>