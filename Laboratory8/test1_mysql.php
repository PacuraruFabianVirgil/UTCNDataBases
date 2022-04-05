<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$servername = "myfolder";
			$username = "root";
			$password = "";
			$dbname = "exams";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
	  			die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT Name, Surname, Gr_Name FROM students JOIN groups ON Group_Id = Gr_Id";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
	  			// output data of each row
	  			echo "<table>";
	  			while($row = $result->fetch_assoc()) {
	    			echo "<tr><th>" . $row["Name"] . "</th><th>" . $row["Surname"]. "</th><th>". $row["Gr_Name"]. "</th></tr>";
	  			}
	  			echo "</table>";
			} else {
	  			echo "0 results";
			}
			$conn->close();
		?>
	</body>
</html>