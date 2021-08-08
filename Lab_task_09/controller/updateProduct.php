<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
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

  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} 
else {
	echo 'You are not allowed to access this page.';
}


?>