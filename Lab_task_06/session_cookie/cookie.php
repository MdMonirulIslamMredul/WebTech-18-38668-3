<?php 
$time = time();
// echo 'cookie done';
//setcookie(name, value, expire);
setcookie ("username",$_POST["username"],time()+ 100);
setcookie ("password",$_POST["password"],time()+ 100);

 ?>