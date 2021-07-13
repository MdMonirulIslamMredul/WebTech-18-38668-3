<?php 
session_start();
require_once 'controller/UserInfo.php';
$User = fetchUser($_SESSION['username']);

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>EDIT PROFILE</title>
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

  
   <fieldset style="width:50%; align-content: center;">
<legend>EDIT PROFILE </legend>     


<form method="post" action="controller/updateUser.php"> 

  Name: 
  <input type="text" name="name" value="<?php echo $User['Name'];?>">
  <span class="error"> </span>
  <br><br>
  Email:
   <input type="text" name="email" value="<?php echo $User['Email'];?>">
  <span class="error"> </span> 
  <br><br> 
  
  Gender: <?php echo $User['Gender'];?>
  <br><br>
  Date of Birth: <?php echo $User['DateOfBirth'];?>

 
 <br><br>
 <input type="submit" name="update" value="update"> 


</fieldset>
</form>

   
   



  </article>






    <?php
    include 'templates\foter.php';
    ?>

</body>
</html>