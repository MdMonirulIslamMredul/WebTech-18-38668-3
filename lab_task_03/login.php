<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>LOGIN</title>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "User Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9 _*&@.]{2,}$/",$name)) {
      $nameErr = "Contains at least 2 characters and  alpha numeric characters,period,dash or underscore only";
      
    }
  }

  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);

   if (!preg_match("/^[a-zA-Z0-9@#$%]{8,}$/",$password)) {
      $passErr = "Password must be grater than 8 characters .";
      
    }

   else if(!preg_match('@[^\w]@', $password))
     {
    $passErr = "Can contain at least one of the special characters (@, #, $,%)";
    }
  }
 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<fieldset style="width:60%;">
<legend>LOGIN </legend>   
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  User Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>

  <input type="checkbox" name="remember" id="remember" value="remember" >
  <label for="remember" >Remember Me</label>
  <br><br>

<input type="submit" name="submit" value="Submit"> 
<a href=""> Forgot Password ? </a>

</form>


</body>
</html>