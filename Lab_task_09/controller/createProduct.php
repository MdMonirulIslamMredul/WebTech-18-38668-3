<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['BuyingPrice'] = $_POST['BuyingPrice'];
	$data['SellingPrice'] = $_POST['SellingPrice'];

	if(isset($_POST['display']))
	{
		$data['Displayable'] = $_POST['display'];
	}
	else{
		$data['Displayable'] = "No";
	}


	

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} 
else {
	echo 'You are not allowed to access this page.';
}

?>