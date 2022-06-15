<?php
session_start();
?>

<html>
<head>
	<title></title>
</head>
<body>
	<center><h3>Views:</h3></center>
	<ul>
		<li><a href="view1.php" target="frame2">view1</a></li>
		<li><a href="view2.php" target="frame2">view2</a></li>
		<li><a href="view3.php" target="frame2">view3</a></li>
		<?php
			if ($_SESSION["admin"] == 1) {
				echo '<li><a href="view4.php" target="frame2">view4</a></li>';
			}
		?>
	</ul>
	<center><h3>Operations:</h3></center>
	<ul>
		<li><a href="select.php" target="frame2">SELECT</a></li>
	<?php
	if ($_SESSION["admin"] == 1) {
		echo '<li><a href="insert.php" target="frame2">INSERT</a></li>';
		echo '<li><a href="update.php" target="frame2">UPDATE</a></li>';
		echo '<li><a href="delete.php" target="frame2">DELETE</a></li>';
		echo '</ul>';
		echo '<center><h3>Stock:</h3></center>';
		echo '<ul>';
		echo '<li><a href="add_stock.php" target="frame2">ADD STOCK</a></li>';
		echo '<li><a href="update_stock.php" target="frame2">UPDATE STOCK</a></li>';
		echo '</ul>';
		echo '<center><h3>Accounts:</h3></center>';
		echo '<ul>';
		echo '<li><a href="add_account.php" target="frame2">ADD</a></li>';
		echo '<li><a href="modify_account.php" target="frame2">MODIFY</a></li>';
		echo '<li><a href="delete_account.php" target="frame2">DELETE</a></li>';
		echo '</ul>';
	} else echo '</ul>';
	echo '<div style="position:absolute; bottom:0px">';
	echo '<a href="index.php" target="_parent">Sign Out from '.$_SESSION["usr"].'</a></div>';
	?>
</body>
</html>