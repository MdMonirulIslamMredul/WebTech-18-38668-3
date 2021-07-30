<!DOCTYPE html>
<html>
<head>
	<title></title>
 <script type="text/javascript" src="Registration.js"></script>  
</head>
<body>

     <?php include 'head.php' ?>  	
 
<fieldset style="width:60%; align-content: center;">
<legend>REGISTRATION </legend> 

<form name="myform" method="post" action="" onsubmit="validateform()" >  
Name: <input type="text" name="name" id="name" onkeyup="checkName() ; en()" onblur="checkName()">
<span id="nameErr"></span>
<br><br>
Email: <input type="text" name="email" id="email" onkeyup="checkemail(); en()" onblur="checkemail()">
<span id="emailErr"></span>
<br><br>  
User Name: <input type="text" name="uname" id="uname" onkeyup="checkuname(); en()" onblur="checkuname()">
<span id="unameErr"></span>
<br><br>
Password: <input type="password" id="password" name="password" onkeyup="checkPass(); en()" onblur="checkPass()">
<span id="passErr"></span>
<br><br>
 
Confrim Password: <input type="password" id="CPass" name="CPass" onkeyup="checkCPass(); en()" onblur="checkCPass()">
<span id="CPassErr"></span>
<br><br>

  GENDER<br>
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="other">Other  
  <span class="error"> </span>
  <br><br>
  
  <legend>Date of Birth:</legend>
  <input type="date" name="dob"  > 

  <br><br>
  

<input id="btn" type="submit" value="register" disabled>  
</form> 
</fieldset>

<?php include 'foter.php' ?>
</body>
</html>