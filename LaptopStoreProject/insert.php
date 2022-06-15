<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form METHOD="POST" ACTION="insert_value.php">
	<h2>Please insert values into all inputs</h2>
	<table>
		<tr>
			<th>Laptop</th>
			<th>Processor</th>
			<th>Ram</th>
		</tr>
		<tr>
			<td><input type="text" name="Laptop_Model" placeholder="Model"></td>
			<td><input type="text" name="Processor_Model" placeholder="Model"></td>
			<td><input type="text" name="Ram_Capacity" placeholder="Capacity (int)"></td>
		</tr>
		<tr>
			<td><input type="text" name="Laptop_Width" placeholder="Width (float)"></td>
			<td><input type="text" name="Processor_Core_Count" placeholder="Core Count (int)"></td>
			<td><input type="text" name="Ram_Technology" placeholder="Technology"></td>
		</tr>
		<tr>
			<td><input type="text" name="Laptop_Height" placeholder="Height (float)"></td>
			<td><input type="text" name="Processor_Nominal_Frequency" placeholder="Nominal Frequency (float)"></td>
			<td><input type="text" name="Ram_Frequency" placeholder="Frequency (float)"></td>
		</tr>
		<tr>
			<td><input type="text" name="Laptop_Depth" placeholder="Depth (float)"></td>
			<td><input type="text" name="Processor_Turbo_Frequency" placeholder="Turbo Frequency (float)"></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="text" name="Laptop_Weigth" placeholder="Weigth (float)"></td>
			<td><input type="text" name="Processor_Cache" placeholder="Cache"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" name="Processor_Technology" placeholder="Technology"></td>
			<td></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<th>Storage</th>
			<th>Display</th>
			<th>Graphics Card</th>
		</tr>
		<tr>
			<td><input type="text" name="Storage_Type" placeholder="Type"></td>
			<td><input type="text" name="Display_Diagonal" placeholder="Diagonal (float)"></td>
			<td><input type="text" name="Graphics_Card_Type" placeholder="Type"></td>
		</tr>
		<tr>
			<td><input type="text" name="Storage_Capacity" placeholder="Capacity"></td>
			<td><input type="text" name="Display_Luminosity" placeholder="Luminosity (int)"></td>
			<td><input type="text" name="Graphics_Card_Model" placeholder="Model"></td>
		</tr>
		<tr>
			<td><input type="text" name="Storage_Interface" placeholder="Interface"></td>
			<td><input type="text" name="Display_Resolution" placeholder="Resolution"></td>
			<td><input type="text" name="Graphics_Card_Capacity" placeholder="Capacity (int)"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" name="Display_Format" placeholder="Format"></td>
			<td><input type="text" name="Graphics_Card_Technology" placeholder="Technology"></td>
		</tr>
	</table>
	<br>
	<input type="submit" value="Insert">
</form>
</body>
</html>