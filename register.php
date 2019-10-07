<!DOCTYPE html>
<html>
<head>
	<title>Register the course</title>
</head>
<body>
	<form method ="post" action = "doRegister.php">
	<table>
		<tr>
			<td>Name</td>
			<td><input types ="text" name ="txtName" ></td>
		</tr>
		<td>Country</td>
		<td>
			<select name="cbCourse">
				<option value ="C#">C#</option>
				<option value ="Java">Java</option>
				<option value ="Cloud">Cloud</otion>
			</select>
		</td>
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td><input type ="Date" name ="dob" ></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<td><input type ="radio" name ="gender" value ="Male">Male
			<td><input type ="radio" name ="gender" value ="Female">Female
		</td>
	</tr>
	<tr>
		<td>Favorites</td>
		<td>
			<td><input type ="checkbox" name ="book" value ="book">Books
			<td><input type ="checkbox" name ="car" value ="car">Cars
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name ="Register"></td>
	</tr>
</table>
</form>
</body>
</html>