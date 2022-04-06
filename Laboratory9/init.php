<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$servername = "lab9";
			$username = "root";
			$password = "";
			$dbname = "exams";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
	  			die("Connection failed: " . $conn->connect_error);
			}
	?>
</body>
</html>