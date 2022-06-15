<html>
<head>
	<title></title>
</head>
<body>
	<h2>Please select the username coresponding to the account that you want to delete</h2>
	<form METHOD="POST" ACTION="<?=$_SERVER['PHP_SELF']?>">
		<select name="Name">
		<?php
		require ("init.php");
		$q = "SELECT Username FROM login";
		$result = $conn->query($q);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo '<option value='.$row["Username"].'>'.$row["Username"].'</option>';
			}
		}
		?>
		</select>
		<input type = "submit" value = "Delete">
	</form>
	<?php
	if(isset($_POST["Name"])){
		$name = $_POST["Name"];
		$query = "DELETE FROM login WHERE Username = '$name'";
		$conn->query($query);
	}
	$conn->close();
	?>
</body>
</html>