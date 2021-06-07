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
$name = $email = $dob = $bg = $dd = $mm = $yyyy =  $gender = $degree  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name="";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
    

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    $gender="";

  }

  $d=$_POST["degree"];

  if (empty($d)  ) {
    $degreeErr = " Please Select Any two degree.";
  } else {
    $degree = test_input($_POST["degree"]);
  }


  if (empty($_POST["bg"])) {
    $bgErr = "blood group is required";
  } else {
    $bg = test_input($_POST["bg"]);
  }

if (empty($_POST["dd"])) {
    $ddErr = "";
  } else {
    $dd = test_input($_POST["dd"]);

  }

if (empty($_POST["mm"])) {
    $mmErr = "";
  } else {
    $mm = test_input($_POST["mm"]);
  }

  if (empty($_POST["yyyy"])) {
    $yyyyErr = "";
  } else {
    $yyyy = test_input($_POST["yyyy"]);
  }

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


          <input type="text" name="dd" style="width: 30px; float: left;">
          <label style="float: left;">&nbsp/&nbsp</label>
          <input type="text" name="mm" style="width: 30px; float: left;">
          <label style="float: left;">&nbsp/&nbsp</label>
          <input type="text" name="yyyy" style="width: 80px; float: left;">
          
<span class="error">*  <?php echo $dobErr;?></span>

  <br><br>
  


  GENDER<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  

  DEGREE <br>
  <input type="checkbox" name="degree" id="ssc" value="SSC" >
  <label for="ssc" >SSC</label>
  <input type="checkbox" name="degree" id="hsc" value="HSC" >
  <label for="hsc" >HSC</label>
  <input type="checkbox" name="degree" id="bsc" value="BSc" >
  <label for="bsc" >BSc</label>
  <input type="checkbox" name="degree" id="msc" value="MSc" >
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
echo $degree;
echo "<br>";
echo $bg;
echo "<br>";


?>

</body>
</html>