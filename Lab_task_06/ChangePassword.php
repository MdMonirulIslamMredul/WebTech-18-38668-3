<?php 

session_start(); 
require_once 'controller/UserInfo.php';
$User = fetchUser($_SESSION['username']);

?>
<!DOCTYPE html>
<html>
<head>
  <title>PROFILE PICTURE</title>
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

<fieldset style="width:60%;">
<legend style="font-size: large;">CHANGE PASSWORD</legend> 
     
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


  Current Password: 
  <input type="text"  name="CurrentPass" value="<?php //echo $CurrentPass;?>">
  <span class="error"> <?php //echo $CurrentPassErr;?></span>
  <br><br>

  New Password:
   <input type="text" name="newpass" value="<?php //echo $newpass;?>">
  <span class="error"> <?php //echo $newpassErr;?></span>
  <br><br>

  Retype New Password:
   <input type="text" name="rtnewpass" value="<?php //echo $rtnewpass;?>">
  <span class="error"> <?php //echo $rtnewpassErr;?></span>
  <br><br>

<input type="submit" name="update" value="update"> 


</form> 

  </article>


  <?php
  include 'templates\foter.php';
  ?>




</body>
</html>