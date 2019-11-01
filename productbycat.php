<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
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
	<div style="position: absolute; top:450px; left:300px; width:800px; height:200px">
		<?php 
		//get CatId which was sent from client by GET Method
		if(isset($_GET['CatId']))
		{
			$catid = $_GET['CatId'];
			$sql = "Select * from product where CatId=" . $catid;
			$pros = query($sql);
			for($i=0; $i<count($pros); $i++)
			{
		?>
				<div class="product">
					<div class="name"><?=$pros[$i][1]?></div>
					<div class="image">
					    <a href="./productdetail.php?pid=<?=$pros[$i][0]?>">
						    <img src="<?=$pros[$i][2]?>" alt="" width="100%" height="100%">
					    </a>
				    </div>
					<div class="price"><?=$pros[$i][3]?></div>
				</div>
		<?php
			}
		} 
		else
		{
			echo "CatId not found!";
		}		
		?>
	</div>
	<?php require_once("./bottom.php"); ?>
</body>
</html>