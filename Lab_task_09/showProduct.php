 <?php include 'Head.php'; ?>

<?php  
require_once 'controller/ProductInfo.php';

$product = fetchProduct($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Product</title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>BuyingPrice</th>
		<th>SellingPrice</th>
		
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product['BuyingPrice'] ?></td>
		<td><?php echo $product['SellingPrice'] ?></td>

		
	</tr>

</table>

<?php include 'foter.php'; ?>
</body>
</html>