<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form METHOD="POST" ACTION="add_result.php">
		<br>
		<label>Username:</label><input type = "text" name="Username"><br><br>
		<label>Password:</label><input type = "text" name="Password"><br><br>
		<label>Admin:</label>
		<select name="Admin">
			<option value=0>no</option>
			<option value=1>yes</option>
		</select><br><br>
		<input type = "submit" value = "Add">
	</form>
</body>
</html>