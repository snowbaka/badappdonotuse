<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	require_once("./db.php");
	?>
		<div class="second">Product List</div>	
		
		<div class="third">
			<table border="1" cellspacing="0">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>CatId</th>
					<th>Details</th>
					<th>Action</th>
				</tr>
		<?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>
				<tr>
					<td><?=$pros[$i][0]?></td>
					<td><?=$pros[$i][1]?></td>
					<td><?=$pros[$i][2]?></td>
					<td><?=$pros[$i][3]?></td>
					<td><?=$pros[$i][4]?></td>
					<td><?=$pros[$i][5]?></td>
					<td>
					<li><a href="update_function.php?pid=<?=$pros[$i][0]?>"><button>Update</button></a></li><br/>
					<li><a href="delete_action.php?pid=<?=$pros[$i][0]?>"><button>Delete</button></a></li><br/>	
					</td>
					</form>
				</tr>
				
			<?php
		}
		?>
			</table>
		<a href="./addproduct.php">New Product</a>
		</div>

	</div>
</body>
</html>