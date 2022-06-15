<?php
session_start();
?>

<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo '<br><center><h2> Welcome ';
	if($_SESSION["admin"] == 1){
		echo 'admin ';
	} else echo 'user ';
	echo $_SESSION["usr"].'!</h2></center>';
	echo '<br><br><center><h2>Please use the menu on the left side.</h2></center>';
	?>
</body>
</html>