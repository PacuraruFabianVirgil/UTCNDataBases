<html>
<head>
	<title></title>
</head>
	<body>
		<form action="<?=$_SERVER['PHP_SELF']?>" METHOD="POST">
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

			$name1=$_POST["Name"];
			$surname1=$_POST["Surname"];

			$sql = "SELECT Stud_Id, Name, Surname, Gender, Date_of_Birth, Year_of_study, Scholarship FROM students WHERE Name='$name1' AND Surname='$surname1'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				echo "<input type='hidden' name='Stud_Id' placeholder=".$row["Stud_Id"]."><br>";
				echo "<label>Name:</label>";
				echo "<input type='text' name='Name' placeholder=".$row["Name"]."><br>";
				echo "<label>Surname:</label>";
				echo "<input type='text' name='Surname' placeholder=".$row["Surname"]."><br>";
				echo "<label>Gender:</label>";
				echo "<input type='text' name='Gender' placeholder=".$row["Gender"]."><br>";
				echo "<label>Date_of_Birth:</label>";
				echo "<input type='text' name='Date_of_Birth' placeholder=".$row["Date_of_Birth"]."><br>";
				echo "<label>Year_of_study:</label>";
				echo "<input type='text' name='Year_of_study' placeholder=".$row["Year_of_study"]."><br>";
				echo "<label>Scholarship:</label>";
				echo "<input type='text' name='Scholarship' placeholder=".$row["Scholarship"]."><br>";
			} else {
				echo "The student ".$name1." ".$surname1." does not exist.";
			}
			$conn->close();
		?>
		<input type="submit">
		</form>


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
			$studid=$_POST["Stud_Id"];
			$name=$_POST["Name"];
			$surname=$_POST["Surname"];
			$gender=$_POST["Gender"];
			$birthdate=$_POST["Date_of_Birth"];
			$studyyear=$_POST["Year_of_study"];
			$scholarship=$_POST["Scholarship"];
			$sq = "UPDATE students SET Name = '$name', Surname = '$surname', Gender = '$gender', Date_of_Birth = '$birthdate', Year_of_study = '$studyyear', Scholarship = '$scholarship' WHERE Stud_Id=$studid";
			$conn->query($sq);

			$conn->close();
		?>
	</body>
</html>