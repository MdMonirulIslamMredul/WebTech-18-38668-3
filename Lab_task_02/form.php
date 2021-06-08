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
$nameErr = $emailErr   = $genderErr = $degreeErr =  $dobErr= $bgErr = $ddErr = $mmErr = $yyyyErr = "";
$name = $email = $dob = $bg = $dd = $mm = $yyyy =  $gender = $degree  = $deg  ="";



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
   

if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"])){
    $dobErr="Date of birth input is requied";
    $dd = test_input($_POST["dd"]);
    $mm = test_input($_POST["mm"]);
    $yyyy = test_input($_POST["yyyy"]);

  }
  else
  {
    $dd = test_input($_POST["dd"]);
    $mm = test_input($_POST["mm"]);
    $yyyy = test_input($_POST["yyyy"]);

    if( !filter_var($dd,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 
            'max_range' => 31
        )))|!filter_var($mm,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 
            'max_range' => 12
        )))|!filter_var($yyyy,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1953, 
            'max_range' => 1998
        ))))
      {$dobErr="Must be valid numbers(dd:1-31,mm: 1-12,yyyy: 1953-1998)";}
  }






  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


  
  if (!empty($_POST["degree"])) {
    $degreeErr = " ";
    foreach ($_POST["degree"] as $degree ) {
       // echo '<br>' .$degree. '<br>';

    }
  } 
  else {
    $degreeErr = " Please Select any two degree.";
  }
}



  if (empty($_POST["bg"])) {
    $bgErr = "blood group is required";
  } else {
    $bg = test_input($_POST["bg"]);
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

      <h1 style="font-size: large;">EXPERIMENT NAME</h1>
      <label>Designing HTML form using PHP with validation of users inputs</label>
      <h1 style="font-size: large;">OBJECTIVE</h1>
      <label>This assignment item is designed to give you some practice on validating user input using PHP.</label>
      <h1 style="font-size: large;">ASSESSMENT TASK</h1>
      <label>1. Design the following HTML form and perform the following validations</label><br><br>
      


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NAME: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  EMAIL: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

 DATE OF BIRTH: <br><br>
<div style=" float: left; margin-left: 12px"><label style="position: relative; bottom: 18px;">dd</label></div>
<div style=" float: left; margin-left: 28px"><label style="position: relative; bottom: 18px;">mm</label></div>
<div style=" float: left; margin-left: 38px"><label style="position: relative; bottom: 18px;">yyyy</label></div><br>

<input type="text" name="dd" value="<?php echo $dd;?>" style="width: 30px; float: left;">
<label style="float: left;">&nbsp/&nbsp</label>
<input type="text" name="mm" value="<?php echo $mm;?>" style="width: 30px; float: left;">
<label style="float: left;">&nbsp/&nbsp</label>
<input type="text" name="yyyy" value="<?php echo $yyyy;?>" style="width: 80px; float: left;">      
<span class="error">*  <?php echo $dobErr;?></span>

  <br><br>
  


  GENDER<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  

  DEGREE <br>
  <input type="checkbox" name="degree[]" id="ssc" value="SSC" >
  <label for="ssc" >SSC</label>
  <input type="checkbox" name="degree[]" id="hsc" value="HSC" >
  <label for="hsc" >HSC</label>
  <input type="checkbox" name="degree[]" id="bsc" value="BSc" >
  <label for="bsc" >BSc</label>
  <input type="checkbox" name="degree[]" id="msc" value="MSc" >
  <label for="msc" >MSc</label>
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

  BlOOD GROUP <br>
 <select name="bg">
 <option disabled="select" selected="select"></option>
 <option>A+</option>
 <option>A-</option>
 <option>B+</option>
 <option>B-</option>
 <option>O+</option>
 <option>O-</option>
 <option>AB+</option>
 <option>AB-</option>
 </select>
  <span class="error">* <?php echo $bgErr;?></span>


<br><br>
<input type="submit" name="submit" value="Submit"> 

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";

echo $dob;
echo "<br>";
echo $dd ;
echo "<br>" ;
echo $mm;
echo "<br>";
echo $yyyy;
echo "<br>";

echo $gender;
echo "<br>";

foreach ($_POST["degree"] as $degree ) {
       echo '<p>' .$degree. '<p>';
    }

echo $bg;
echo "<br>";


?>

</body>
</html>