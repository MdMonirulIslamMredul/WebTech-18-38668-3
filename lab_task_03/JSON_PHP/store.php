<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr   = $genderErr = $degreeErr =  $dobErr = $unErr = $passErr= $cpasswordErr = "";
$name = $email = $dob =   $gender  = $un = $password = $cpassword = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if( preg_match("/^[0-9]/", $name))
      {$nameErr="Must start with a letter";}
    else if (!preg_match("/^[a-zA-Z- . ]{2,}$/",$name)) {
      $nameErr = "Contains at least two letter and  period, dash symbols only";
      $name="";
    }

  }
  


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format .Example: anything@example.Com";
      $email="";
    }
  }
   
  if (empty($_POST["un"])) {
    $unErr = "User Name is required";
  } else {
    $un = test_input($_POST["un"]);
    if (!preg_match("/^[a-zA-Z0-9 _*&@.]{2,}$/",$un)) {
      $unErr = "Contains at least 2 characters and  alpha numeric characters,period,dash or underscore only";
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


  $cpassword = $_POST['cpassword'];

   if($cpassword != $password){
       $cpasswordErr=" * Current Password does not machted";
      }
       else if($cpassword != $password){       
        $cpasswordErr = "  password  machted";
        
         }

           
  




  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

}

    if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                      'username'     =>     $_POST["un"],
                      'password'    =>    $_POST['password'],
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

     
   <fieldset style="width:50%;">
<legend>REGISTRATION </legend>     


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  User Name: <input type="text" name="un" value="<?php echo $un;?>">
  <span class="error"> <?php echo $unErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  Confrim Password: <input type="password" name="cpassword" value="<?php echo $cpassword;?>">
  <span class=""> <?php echo $cpasswordErr;?></span>
 

  <br><br>
  


  GENDER<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
  
  <legend>Date of Birth:</legend>
  <input type="date" name="dob"> <br><br>
  


<input type="submit" name="submit" value="Submit"> 


</fieldset>
</form>


</body>
</html>