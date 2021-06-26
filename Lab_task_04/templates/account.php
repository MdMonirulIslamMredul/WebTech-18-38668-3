<!DOCTYPE html>
<html>
<head>
<title>DASHBOARD</title>
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


<section>
  <nav>
  

  <p> Account</p>
    <ul>
     
      <li><a href="Dashboard.php">Dashboard</a></li>
      <li><a href="ViewProfile.php">View Profile</a></li>
      <li><a href="EditProfile.php">Edit Profile</a></li>
      <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
      <li><a href="ChangePassword.php">Change Password</a></li>
      <li><a href="session_cookie\destroySession.php">Logout</a></li>

    </ul>
  </nav>
  




</body>
</html>
