<!DOCTYPE html>
<html>
<head>
    <title>User REGISTRATION</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

    <?php
    include 'head.php';
    ?>


<?php
// error_reporting(0);

// define variables and set to empty values
$nameErr = $emailErr   = $genderErr = $degreeErr =  $dobErr = $unErr = $passErr= $cpasswordErr = "";
$name = $email = $dob =   $gender  = $username = $password = $cpassword = "";
$namecheck = $emailcheck =  $unamcheck =  $passcheck= $gndrcheck = $cpasscheck = "" ;  // variable for checking null input


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if( preg_match("/^[0-9]/", $name))
      {$nameErr="Must start with a letter";}
    else if (!preg_match("/^[a-zA-Z- . ]{2,}$/",$name)) {
      $nameErr = "Contains at least two letter and  period, dash symbols only";
      
    }
    else if($_POST["name"] !=null)
    {
      $namecheck=$_POST["name"];
    }


  }
  


 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

   if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
      $emailErr = "Email format must be like:  'example@mail.com' .";
      
    }

     else if($_POST["email"] !=null)
    {
      $emailcheck=$_POST["email"];
    }
  }
   

   
  if (empty($_POST["username"])) {
    $unErr = "User Name is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z0-9 _*&@.]{2,}$/",$username)) {
      $unErr = "Contains at least 2 characters and  alpha numeric characters,period,dash or underscore only";
    }
    else if($_POST["username"] != null)
    {
      $unamcheck=$_POST["username"];
    }
  }




 
 if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);

   if (!preg_match("/^[a-zA-Z0-9@#$%]{8,}$/",$password)) {
      $passErr = "*Password must be grater than 8 characters .";
      
    }

   else if(!preg_match('@[^\w]@', $password))
     {
    $passErr = "*Can contain at least one of the special characters (@, #, $,%)";
    }
    else if($_POST["password"] != null)
    {
      $passcheck=$_POST["password"];
    }
  }


$cpassword = $_POST['cpassword'];

   if($cpassword != $password){
       $cpasswordErr=" * Current Password does not machted";
      }
    else{
        //$cpasswordErr = "  Password Machted";
     if($_POST["cpassword"] != null)
    {
      $cpasscheck=$_POST["cpassword"];
      $cpasswordErr = "  Password Machted";
    }
    }


           
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    if($_POST["gender"] != null)
    {
      $gndrcheck=$_POST["gender"];
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
<div class="row">
<div class="col-9 col-s-12">
     
   <fieldset style="width:50%; align-content: center;">
<legend>USER REGISTRATION </legend>     


<form action="controller/createUser.php" method="POST" enctype="multipart/form-data"> 

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  User Name: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error"> <?php echo $unErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>" id="myInput">
  <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "cpassword") {
    x.type = "text";
  } else {
    x.type = "cpassword";
  }
}
</script>
<span class="error"> <?php echo $passErr;?></span>
  <br><br>
  Confrim Password: <input type="password" name="cpassword" value="<?php echo $cpassword;?>" >
  <span class=""> <?php echo $cpasswordErr;?></span>
 

  <br><br>
  


  GENDER<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
  
  <legend>Date of Birth:</legend>
  <input type="date" name="dob" > <br><br>
  


<input type="submit" name="Submit" value="Submit"> 

<?php //echo $message; ?>


</fieldset>
</form>

  </div>
</div>



    <?php
    include 'foter.php';
    ?>

</body>
</html>