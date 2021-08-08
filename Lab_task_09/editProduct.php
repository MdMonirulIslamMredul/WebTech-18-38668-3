<?php include 'Head.php'; ?>
<?php 

require_once 'controller/ProductInfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT PRODUCT</title>
</head>
<body>
<fieldset style="width:20%; align-content: center;">
<legend><b> EDIT PRODUCT </b></legend> 


 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Buying Price:</label><br>
  <input value="<?php echo $product['BuyingPrice'] ?>" type="text" id="BuyingPrice" name="BuyingPrice"><br>
  <label for="SellingPrice">Selling Price:</label><br>
  <input value="<?php echo $product['SellingPrice'] ?>" type="text" id="SellingPrice" name="SellingPrice"><br><br>
  <label for="display"> Display</label><br>
  <input  value="Yes" type="checkbox" id="display" name="display" >
  

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

  <br><br>

  <input type="submit" name = "updateProduct" value="Save">
 
</form> 
</fieldset>
<?php include 'foter.php'; ?>
</body>
</html>

