<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require ("init.php");
	if(isset($_POST['Password'])){
		$newpass = $_POST['Password'];
	} else $newpass = 0;
	if(isset($_POST['Admin'])){
		$admin = 1;
	} else $admin = 0;
	
	if(($_POST['Password']!=NULL)&&($_POST['initName']!=NULL)){
		$newpass = $_POST['Password'];
		if(isset($_POST['Admin'])){
			$admin = 1;
		} else $admin = 0;
		$name = $_POST['initName'];
		$query = "UPDATE login SET Password = '$newpass', Admin = $admin WHERE Username = '$name';";
		$conn->query($query);
		echo "<h2>Succes!</h2>";
	} else echo "<h2>Failure!</h2><h4>Insert values into all fields</h4>";
	$conn->close();
	?>
</body>
</html>