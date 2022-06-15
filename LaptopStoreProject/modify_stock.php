<html>
<head>
	<title></title>
</head>
<body>
	<form METHOD="POST" ACTION="stock_update_result.php">
		<?php
		require ("init.php");
		$id = $_POST["Name"];
		$q = "SELECT * FROM availability WHERE Id=$id";
		$result = $conn->query($q);
		if($result->num_rows > 0) {
			echo "<h2>Select the store in which you want to update a stock</h2><br>";
			echo "<select name='Store'>";
			while($row = $result->fetch_assoc()){
				echo '<option value='.$row["Deposit_Id"].'>'.$row["Store_Name"].'</option>';
			}
			echo "</select><br><br>";
			echo "<label>Stock value: </label><input type='text' name='Value_Stock'><br><br>";
			echo "<label>Price value: </label><input type='text' name='Value_Price'><br><br>";
			echo "<input type='hidden' name='Id' value=$id>";
			echo "<input type='submit' value='Modify'>";
		} else {
			echo "<h2>No store has set Value and Price for this laptop model</h2>";
			echo "<h2>Go to ADD STOCK to insert them</h2>";
		}
		$conn->close();
		?>
	</form>
</body>
</html>