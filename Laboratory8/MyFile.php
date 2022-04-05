<html>
	<head>
		<title>HTML-PHP parameter transmission</title>
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

				$name=$_POST["Name"];
				$surname=$_POST["Surname"];
				$birthplace=$_POST["Place_of_birth"];
				$address=$_POST["Address"];
				$gender=$_POST["Gender"];
				$day=$_POST["Day"];
				$month=$_POST["Month"];
				$year=$_POST["Year"];
				$studyyears=$_POST["Years_of_study"];
				if (isset($_POST["Scholarship"]) == true) {
					$scholarship=$_POST["Scholarship"];
				}
				else $scholarship="";
				$date = $year."-".$month."-".$day;

				$q = "INSERT INTO students (Name, Surname, Gender, Date_of_Birth, Year_of_study, Scholarship)
					VALUES ('$name', '$surname', '$gender', '$date', '$studyyears', '$scholarship')";
				$conn->query($q);
				$conn->close();

				echo ("Name: ".$name."<br>");
				echo ("Surname: ".$surname."<br>");
				echo ("Gender: ".$gender."<br>");
				switch ($month) {
					case 1:
						echo ("Date of Birth: ".$day.", January, ".$year."<br>");
						break;
					case 2:
						echo ("Date of Birth: ".$day.", February, ".$year."<br>");
						break;
					case 3:
						echo ("Date of Birth: ".$day.", March, ".$year."<br>");
						break;
					case 4:
						echo ("Date of Birth: ".$day.", April, ".$year."<br>");
						break;
					case 5:
						echo ("Date of Birth: ".$day.", May, ".$year."<br>");
						break;
					case 6:
						echo ("Date of Birth: ".$day.", June, ".$year."<br>");
						break;
					case 7:
						echo ("Date of Birth: ".$day.", July, ".$year."<br>");
						break;
					case 8:
						echo ("Date of Birth: ".$day.", August, ".$year."<br>");
						break;
					case 9:
						echo ("Date of Birth: ".$day.", September, ".$year."<br>");
						break;
					case 10:
						echo ("Date of Birth: ".$day.", October, ".$year."<br>");
						break;
					case 11:
						echo ("Date of Birth: ".$day.", November, ".$year."<br>");
						break;
					case 12:
						echo ("Date of Birth: ".$day.", December, ".$year."<br>");
						break;
					default:
						break;
				}
				echo "Years of study: ".$studyyears."<br>";
				if ($scholarship=="on") {
					echo ("Takes scholarship.<br>");
				}
				else echo ("Doesn't take scholarship.<br>");

				if ($month > date("m") || $month == date("m") && $day >= date("d")) {
					echo "Age: ".(date("Y") - $year - 1)."<br>";
				}
				else echo "Age: ".(date("Y") - $year)."<br>";

				echo "The student name is ".$name." ".$surname."<br>";

				$teachings=array("mathematics", "physics", "chemistry", "mechanics", "electronics");

				echo "<ul>";
				for ($i=0; $i<sizeof($teachings); $i++) {
					echo "<li>".$teachings[$i]."</li>";
				}
				echo "</ul>";

				echo "<ol>";
					echo "<li>"."The students must be present at all the laboratories."."</li>";
					echo "<li>"."The students must be always respectful to teachers and colleagues."."</li>";
					echo "<li>"."The students must not cheat at exams."."</li>";
				echo "</ol>";
			?>

		</p>
	</body>
</html>