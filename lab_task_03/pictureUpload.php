<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PROFILE PICTURE</title>
</head>
<body>
	
	<fieldset style="width:20%;">
	<legend>PROFILE PICTURE</legend>   
<form action="upload.php" method="post" enctype="multipart/form-data">

	<img src="icon.png" alt="Profile Picture" width="100" height="100">

	<br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>