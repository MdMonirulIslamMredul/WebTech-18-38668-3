<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   
<fieldset style="width:20%; align-content: center;">
<legend><b>ADD PRODUCT</b> </legend> 

<form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="BuyingPrice">Buying Price:</label><br>
  <input type="text" id="BuyingPrice" name="BuyingPrice"><br>
  <label for="SellingPrice">Selling Price:</label><br>
  <input type="text" id="SellingPrice" name="SellingPrice"><br><br>
  <label for="display">Display</label>
  <input type="checkbox" name="display" id="display" value="Yes">
  
  <br><br>
  <input type="submit" name = "createProduct" value="Save">

  
  

  <!-- <input type="reset"> --> 
</form> 
</fieldset>


</body>
</html>

