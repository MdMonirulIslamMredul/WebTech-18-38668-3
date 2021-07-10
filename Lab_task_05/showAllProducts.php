<?php  
require_once 'controller/ProductInfo.php';

$products = fetchAllProducts();

    include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY</title>
<style>
table {
  width: 100%
}

table, th, td {
	
  border: 1px solid black;
  padding: 5px;
  border-collapse: collapse;
   
}

</style>
</head>
<body>

<fieldset style="width:30%; align-content: center;">
<legend><b>DISPLAY </b></legend> 

<table>
	<thead>
		<tr>
			<th>Name</th>
			<!-- <th>BuyingPrice</th>
			<th>SellingPrice</th> -->
			<th>Profit</th>
			
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>

				<!-- <td><?php echo $product['BuyingPrice'] ?></td>
				<td><?php echo $product['SellingPrice'] ?></td>
 -->

				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>



				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp
					<a href="showDeleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>

</body>
</html>