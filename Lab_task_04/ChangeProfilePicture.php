<!DOCTYPE html>
<html>
<head>
  <title>CHANGE PROFILE PICTURE</title>
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






   <fieldset style="width:50%; align-content: center;"><legend>PROFILE PICTURE</legend>   
<form action="upload.php" method="post" enctype="multipart/form-data">

  <img src="profile_pictures/icon.png" alt="Profile Picture" width="100" height="100">

  <br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
  

</fieldset>
</form>

   
   


  </article>






  <?php
  include 'templates\foter.php';
  ?>

</body>
</html>