<html>
<head>
	<title></title>
</head>
<body>
	<h2>This is the total number of units in stock for each laptop</h2>
	<?php
	require ("init.php");
	$query = "SELECT Model_l, SUM(Stock) AS Total_Stock FROM laptop JOIN availability ON Availability_Id=Id GROUP BY Model_l";
	$result = $conn->query($query);
	$conn->close();
	echo "<table><tr>";
	echo "<th style='border: 2px solid'>Laptop Model</th>";
	echo "<th style='border: 2px solid'>Total Stock</th>";
	echo "</tr>";
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row["Model_l"]."</td>";
			echo "<td>".$row["Total_Stock"]."</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>