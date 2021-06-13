<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "etap_3"

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$result = $conn->query("SELECT * FROM products LIMIT 10");

?>
<html>
	<head>
		<title>Онлайн магазин - главна страница</title>
		<meta charset="UTF-8">
		<meta name="description" content="Sample of online internet shop">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="author" content="Galina Georgieva">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div id="content">
		<h1>Главна страница</h1>
		<table>
			<caption>Продукти за продажба</caption>
			<tr>
				<th>Име</th>
				<th>Кратко описание</th>
				<th>Цена</th>
				<th>Снимка</th>
			</tr>
			<!-- rows of products -->
			<? while ($row = $result->fetch_assoc()) { 
				$product_id = $row['product_ID'];
				$product_name = $row["product_Name"];
				$product_price = $row["product_Price"];	
				$product_sell_counter = $row["product_Sell_Counter"];	
				$product_description = $row["product_Description"];		
			?>
			<tr>
				<td class="productName"><a href="product.php?product_id=<? echo $product_id; ?>"><? echo $product_name; ?></a></td>
				<td class="productDescription">
					<h3>Основна информация</h3>
					<? echo product_description; ?>
				</td>
				<td class="productPrice">3189 лв</td>
				<td class="productPicture"><img src="img/products/<? echo $product_id; ?>.jpg" /></td>
			</tr>
			<? } 
			//while 
			?>
			<!-- end rows of products -->
		</table> 
		</div>
	</body>
</html><?

/* free result set */
$result->close();

/* close connection */
$conn->close();
?>