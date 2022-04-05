<html>
	<head>
		<title></title>
	</head>
	<body>
		<form METHOD="POST" ACTION="http://myfolder/update_student.php">
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

			$sql1 = "SELECT Name FROM students";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0) {
	  			echo "<select name='Name'><optgroup label='Name'>";
	  			while($row1 = $result1->fetch_assoc()) {
	    			echo "<option value=".$row1["Name"].">".$row1["Name"]."</option>";
	    		}
	    		echo "</optgroup></select>";
	    		echo "						";
			} else {
	  			echo "The DataBase is empty";
			}

			$sql2 = "SELECT Surname FROM students";
			$result2 = $conn->query($sql2);
			if ($result2->num_rows > 0) {
	  			echo "<select name='Surname'><optgroup label='Surname'>";
	  			while($row2 = $result2->fetch_assoc()) {
	    			echo "<option value=".$row2["Surname"].">".$row2["Surname"]."</option>";
	    		}
	    		echo "</optgroup></select>";
	    		echo "						";
	    		echo "<input type='submit'>";
			} 

			$conn->close();
		?>
		</form>
	</body>
</html>