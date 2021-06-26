<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
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
<legend>PROFILE </legend>     


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

</p>
<table style="width:50%">
  
  <tr>

    <td>Name </td>
    <td>: <?php echo $name ;?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Email</td>
    <td>: <?php echo $email;?></td>
    
  </tr>
  <tr>
    <td>Gender</td>
    <td>: <?php echo $Gender;?></td>
    
  </tr>
  <tr>
    <td>Date of Birth</td>
    <td>: <?php echo $dob;?></td>
    
  </tr>

</table>

  <img src="profile_pictures\icon.png" alt="<?php echo $name ;?>"  style="margin-top:-100px;margin-left:300px;width:100px;height:100px; ">
  <br>
  <a href="ChangeProfilePicture.php" style="margin-left:300px;"> Change Picture </a>
  <br>
  <a href="EditProfile.php"> Edit Profile </a>

</fieldset>
</form>

   
   



  </article>






	<?php
	include 'templates\foter.php';
	?>

</body>
</html>