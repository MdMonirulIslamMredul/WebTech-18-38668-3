<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>CHANGE PASSWORD</title>
</head>
<body>  

<?php
// define variables and set to empty values
$CurrentPassErr = $newpassErr = $rtnewpassErr="";
$CurrentPass = $newpass =  $rtnewpass="" ;
$exitPass="abc@1234";



if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if(isset($_POST['submit'])){
        
        $CurrentPass = $_POST['CurrentPass'];
        $newpass = $_POST['newpass'];
        $rtnewpass = $_POST['rtnewpass'];



        if($CurrentPass != $exitPass){
            $CurrentPassErr=" * Current Password does not machted";
        }

        else if($newpass==$CurrentPass) {

          $newpassErr = " * This Password already exits.Type new password";  }

        else {
            if($newpass == $rtnewpass){

                // $newpassErr = " * Valid password";
            }
            else{
                $rtnewpassErr = " * Retype password not machted";
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
</body>
</html>