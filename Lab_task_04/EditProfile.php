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
<?php   
                           // session_start(); 
                          
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
                              
                               $username=$_SESSION['name'];
                              if($username==$row["username"])

                              {
                                 
                               $name=$row["name"]; 
                               $email=$row["e-mail"];
                               $Gender=$row["gender"];
                               $dob=$row["dob"];
                              }

                               
                          }  
                          ?>  



<article>

  
   <fieldset style="width:50%; align-content: center;">
<legend>EDIT PROFILE </legend>     


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

  Name: 
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> </span>
  <br><br>
  Email:
   <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> </span> 
  <br><br> 
  
  Gender: 
   <input type="Gender" name="Gender" value="<?php echo $Gender;?>">
  <span class="error"> </span> 
  <br><br>
  Date of Birth: 
   <input type="dob" name="dob" value="<?php echo $dob;?>">
  <span class=""> </span>
  
 
 <br><br>
 <input type="submit" name="submit" value="Submit"> 


</fieldset>
</form>

   
   



  </article>






	<?php
	include 'templates\foter.php';
	?>

</body>
</html>