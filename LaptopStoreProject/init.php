<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$servername = "project";
			$username = "root";
			$password = "";
			$dbname = "laptopdata";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
	  			die("Connection failed: " . $conn->connect_error);
			}
	?>
</body>
</html>