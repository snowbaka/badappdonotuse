<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	require_once("./db.php");
	require_once("./header.php");
	?>
		<div class="advert"></div>
		<?php 
		require_once("./left.php");
		?>		
		<?php 
		if(isset($_GET['pid']))
		{
			$pid = $_GET['pid'];
			$sql = "Select * from product where ProductId='" . $pid . "'";
			$pros = query($sql);
		?>
			<div style="position: absolute; top:450px; left:290px; width:300px; height:600px">
			<div class="product2">
				<div class="name"><?=$pros[0][1]?></div>
				<div class="image2">
					<a href="">
						<img src="<?=$pros[0][2]?>" alt="" width="100%" height="100%">
					</a>
				</div>
				<div class="price"><?=$pros[0][3]?></div>
				<div class="details"><?=$pros[0][5]?></div>
			</div>
		<?php
		} 
		else
		{
			echo "pid not found!";
		}
		?>
	</div>
	<?php require_once("./bottom.php"); ?>
</body>
</html>