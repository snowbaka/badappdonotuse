<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
</head>
<body>
	<form method ="post" action = "doInsert.php">
	<table>
		<tr>
			<td>Name</td>
			<td><input types ="text" name ="txtName" ></td>
		</tr>
		<td>Category</td>
		<td>
			<select name="cbCategory">
				<option value ="Electronics">C#</option>
				<option value ="Furniture">Java</option>
				<option value ="Clothings">Cloud</otion>
			</select>
		</td>
	</tr>
	<tr>
		<td>Stock</td>
			<td><input type ="radio" name ="stock" value ="Available">Available
			<input type ="radio" name ="stock" value ="Unavailable">Unavailable
	</tr>
	<tr>
		<td>Price</td>
		<td><input types ="text" name ="txtPrice" ></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name ="Insert"></td>
	</tr>
</table>
</form>
</body>
</html>