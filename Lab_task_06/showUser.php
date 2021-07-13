<?php  
 session_start();

require_once 'controller/UserInfo.php';

$User = fetchUser($_SESSION['username']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
<style>
* {
  box-sizing: border-box;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}



article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}



</style>
</head>
<body>

	<?php
	include 'templates\head2.php';
	?>

	<?php
	include 'templates\account.php';
	?>
  
 
 
   

<article>
   <fieldset style="width:55%; align-content: center;">
<legend>PROFILE </legend>     


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

</p>
<table style="width:55%">
  
  <tr>

    <td>Name </td>
    <td>: <?php echo $User['Name'] ;?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Email</td>
    <td>: <?php echo $User['Email'];?></td>
    
  </tr>
  <tr>
    <td>Gender</td>
    <td>: <?php echo $User['Gender'];?></td>
    
  </tr>
  <tr>
    <td>Date of Birth</td>
    <td>: <?php echo $User['DateOfBirth'];?></td>
    
  </tr>

</table>


  
  <br>
  <a href="editUser.php"> Edit Profile </a>

</fieldset>
</form>





  </article>






	<?php
	include 'templates\foter.php';
	?>

</body>
</html>