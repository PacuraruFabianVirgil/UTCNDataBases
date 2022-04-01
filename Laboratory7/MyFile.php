<html>
	<head>
		<title>HTML-PHP parameter transmission</title>
	</head>
	<body>
			<?php
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

			?>

		</p>
	</body>
</html>