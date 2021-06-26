<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>

</head>
<body>

	<?php
	include 'templates\head.php';
	?>

<?php
// define variables and set to empty values
$emailErr = $pass = $passtext = "";
$email =  "";


$data = file_get_contents("data.json");  
$data = json_decode($data, true);   

foreach($data as $row){  
  
      $exitemail=$row["e-mail"]; 
      $exitpass=$row["password"]; 

 if (isset($_POST['email'])) {
      $email = test_input($_POST["email"]);
    if ($email==$exitemail ) {
        $emailErr="Email matched.";
        $passtext="Password :";
        $pass=$exitpass;
    }
     else if ($_POST['email'] != $exitemail ){
        $emailErr="Email does not match. Please enter correct One.";
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
<legend>FORGET PASSWORD </legend>   
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
  Enter Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>

  <span class="error"> <?php echo $passtext;?></span>
  <span class="error"> <?php echo $pass;?></span><br><br>

  

 

<input type="submit" name="submit" value="Submit"> 


</form>
</fieldset>

	<?php
	include 'templates\foter.php';
	?>

</body>
</html>