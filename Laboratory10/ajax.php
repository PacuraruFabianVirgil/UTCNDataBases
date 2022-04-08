<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$servername = "lab10";
		$username = "root";
		$password = "";
		$dbname = "exams";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
	  		die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT Stud_Id, Name, Surname, Gender FROM students";

		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->store_result();

		echo "<table><tr><td>Stud_Id</td><td>Name</td><td>Surname</td><td>Gender</td></tr>";

		do {
			$stmt->bind_result($id, $name, $surname, $gender);
			echo "<tr><td>".$id."</td><td>".$name."</td><td>".$surname."</td><td>".$gender."</td></tr>";
		} while($row = $stmt->fetch());

		$stmt->close();

		echo "</table>";
	 ?>
</body>
</html>