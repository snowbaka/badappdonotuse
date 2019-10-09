<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
	<?php 
		$name = $_POST["txtName"];
		$category = $_POST["cbCategory"];	
		$stock = $_POST["stock"];
		$price = $_POST["txtPrice"];
		
		
		//Refere to database 
	   $db = parse_url(getenv("DATABASE_URL"));
	   $pdo = new PDO("pgsql:" . sprintf(
	        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	        $db["host"],
	        $db["port"],
	        $db["user"],
	        $db["pass"],
	        ltrim($db["path"], "/")
	   ));
	   $data = [
		    'name' => $name,
		    'category' => $category,
		    'stock' => $stock,
		    'price' => $price
		];
		$stmt =  $pdo->prepare("INSERT INTO insertproduct(name, category, stock, price) VALUES 
			(:name,:category,:stock, :price)");	
		$stmt->execute($data);
	 ?>
	 <h2>Inserted product <?php echo $name?> into the 
	 		<?php echo $category?> category
	 </h2>
	 <ul>
	 	<li><?php echo $name?></li>
	 	<li><?php echo $category?></li>
	 	<li><?php echo $stock?></li>
	 	<li><?php echo $price?></li>
	 </ul>
	 <a href="index.php">Index</a>
</body>
</html>