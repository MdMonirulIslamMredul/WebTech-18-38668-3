
<?php  
require_once 'controller/ProductInfo.php';

$products = fetchAllProducts();

    include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>SEARCH PRODUCT</title>
<style>
table, th, td {
  border: 1px solid black;
  padding: 10px;
  border-collapse: collapse;
}

</style>
</head>
<body>
 
<fieldset style="width:20%; align-content: center;">
<legend><b>SEARCH </b></legend>

<!-- [SEARCH FORM] -->
    <form method="post" action="controller/findProduct.php">
      
      <input type="text" name="Product_name" />
      <input type="submit" name="findProduct" value="Search By Name"/>
    </form> 

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
