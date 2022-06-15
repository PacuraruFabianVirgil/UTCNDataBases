<html>
<head>
	<title></title>
</head>
<body>
	<h2>This gives the relationship between stores</h2>
	<?php
	require ("init.php");
	$query = "SELECT X.Store_Name AS small_store, Y.Store_Name AS big_store, X.Deposit_Id AS id_small, Y.Deposit_Id AS id_big  FROM availability X JOIN availability Y on X.Bigger_Deposit_Id=Y.Deposit_Id GROUP BY small_store, big_store";
	$result = $conn->query($query);
	$conn->close();
	echo "<table><tr>";
	echo "<th style='border: 2px solid'>Smaller store</th>";
	echo "<th style='border: 2px solid'>Bigger store</th>";
	echo "</tr>";
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			if($row["id_big"]!=$row["id_small"]){
				echo "<tr>";
				echo"<td>".$row["small_store"]."</td>";
				echo"<td>".$row["big_store"]."</td>";
				echo "</tr>";
			}	
		}
	}
	echo "</table>";
	?>
</body>
</html>