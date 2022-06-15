<html>
<head>
	<title></title>
</head>
<body>
	<h2>This represents the number of stores that have the laptop in stock</h2>
	<?php
	require ("init.php");
	$query = "SELECT Model_l, COUNT(*) AS Store_that_has FROM laptop JOIN availability ON Availability_Id=Id GROUP BY Model_l ORDER BY Store_that_has DESC LIMIT 5" ;
	$result = $conn->query($query);
	$conn->close();
	echo "<table><tr>";
	echo "<th style='border: 2px solid'>Laptop Model</th>";
	echo "<th style='border: 2px solid'>Total of Stores that have it</th>";
	echo "</tr>";
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row["Model_l"]."</td>";
			echo "<td>".$row["Store_that_has"]."</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>