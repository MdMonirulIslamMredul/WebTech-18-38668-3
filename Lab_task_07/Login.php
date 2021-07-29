<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>

	<?php
	include 'head.php';
	?>

<div class="row">
<div class="col-6 col-s-12">

<fieldset style="width:60%;">
<legend>LOGIN </legend>   
<form action="controller/userLogin.php" method="post">
    


        Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
        
        <br><br>
         Password: <input name="password" type="text" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" >
       
        

        <br><br>


        <input type="checkbox" name="remember" /> Remember me
    <br><br>
    <input type="submit" name="submit">

    <a href="ForgetPassword.php"> Forgot Password ? </a>
    
</form>
</fieldset>

</div>
</div>
	<?php
	include 'foter.php';
	?>
   

</body>
</html>