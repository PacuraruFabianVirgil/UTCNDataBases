<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require ("init.php");
	if(($_POST["Username"]!=NULL)&&($_POST["Password"]!=NULL)){
		$usr = $_POST["Username"];
		$pass = $_POST["Password"];
		$admin = $_POST["Admin"];
		$query1 = "SELECT * FROM login";
		$result1=$conn->query($query1);
		$query2 = "SELECT * FROM login WHERE Username!='$usr'";
		$result2=$conn->query($query2);
		if(($result1->num_rows)==($result2->num_rows)){
			$q = "INSERT INTO login (Username, Password, Admin) VALUES ('$usr', '$pass', $admin)";
			$conn->query($q);
			echo "<h2>Succes!</h2>";
		} else {
			echo "<h2>The username already exists</h2>";
			echo "<h2>Choose another one and try again</h2>";
		}
	} else echo "<h2>Failure!</h2><h4>Insert values into all fields</h4>";
	$conn->close();
	?>
</body>
</html>