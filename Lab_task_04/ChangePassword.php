<!DOCTYPE html>
<html>
<head>
  <title>PROFILE PICTURE</title>
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



<article>
<?php 

  // session_start(); 

// define variables and set to empty values
$CurrentPassErr = $newpassErr = $rtnewpassErr="";
$CurrentPass = $newpass =  $rtnewpass="" ;
// $exitPass="";
                          
    $data = file_get_contents("data.json");  
    $data = json_decode($data, true);  
                
  foreach($data as $row) 
  {  
     $username=$_SESSION['name'];

    if($username==$row["username"]) {

         $exitPass=$row["password"];

        if(isset($_POST['submit'])){



        $CurrentPass = $_POST['CurrentPass'];
        $newpass = $_POST['newpass'];
        $rtnewpass = $_POST['rtnewpass'];



        if($CurrentPass != $exitPass){
            $CurrentPassErr=" *Current Password does not machted";
        }

        else if($newpass==$CurrentPass) {

          $newpassErr = " *This Password already exits.Type new password";  }


        else {
          $CurrentPassErr=" *Current Password machted";

            if($newpass != $rtnewpass){

                 $rtnewpassErr = " *Retype password not machted";
            }

            else if ( $rtnewpass != null && $newpass == $rtnewpass ){
                $rtnewpassErr = " *Valid Password";
            }
           }
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
<legend style="font-size: large;">CHANGE PASSWORD</legend> 
     
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


  Current Password: 
  <input type="text"  name="CurrentPass" value="<?php echo $CurrentPass;?>">
  <span class="error"> <?php echo $CurrentPassErr;?></span>
  <br><br>

  New Password:
   <input type="text" name="newpass" value="<?php echo $newpass;?>">
  <span class="error"> <?php echo $newpassErr;?></span>
  <br><br>

  Retype New Password:
   <input type="text" name="rtnewpass" value="<?php echo $rtnewpass;?>">
  <span class="error"> <?php echo $rtnewpassErr;?></span>
  <br><br>

<input type="submit" name="submit" value="Submit"> 


</form> 

  </article>


  <?php
  include 'templates\foter.php';
  ?>




</body>
</html>