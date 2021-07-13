<!DOCTYPE html>
<html>
<head>
	<title>Header2</title>
<style>
header {
  background-color: #d1e0e0 ;
  padding: 10px;
  text-align: left;
  font-size: 30px;
  border-style: groove;
}
h2 { 
  padding: 10px;
  text-align: right;
  font-size: 25px;
  
  
}

</style>
</head>
<body>

<header>
  <h1> <span style="color:#004d4d;font-weight:bold">Home Appliance and Servicing</span> </h1>

<h2>
	
<?php 

// session_start(); 

if (isset($_SESSION['username'])) {
  echo "<p> Welcome ".$_SESSION['username']."<label> | </label> <a href='session_cookie\destroySession.php'>Logout</a>  </p>";
  // echo "<a href='product.php'>Product</a><br>"; 
  

}
else{
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>
  <a href="" ></a>
  

  </p>

</h2>


  </header>




</body>
</html>