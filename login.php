<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	require_once("./db.php");
	require_once("./header.php");
	?>
	<div class="login-section">
		<table class='login'>
			<form action="" method="Post">
				<tr>
					<td colspan="2">Login</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Login"></td>
				</tr>
			</form>
		</table>
		<?php 
		if(isset($_POST['username']) && isset($_POST['pass']))
		{
			$em = $_POST['username'];
			$pw = $_POST['pass'];
			$sql = "Select * from account where Username='" . $em 
				. "' and Password='" . $pw . "'";
			$acc = query($sql);
			if(count($acc)>0)
			{
				header("Location: ./admin.php");
			}
			else
			{
				echo('<span style="color:red;">username or Password is not correct</span>');
			}
		}
	
		?>
</body>
</html>