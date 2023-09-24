<?php
   session_start();
   $uname = $_POST['staffid'];
   $pass = $_POST['pass'];
 $c=new mysqli("localhost","root","","placement") or die('connection failed');
 $q="SELECT * from stafflogin where username='$uname' and passwrd='$pass'";
 $result=mysqli_query($c,$q);
 $count=mysqli_num_rows($result);
 if ($count>0) {
  
	echo "<script> window.open('slogin.php?staffid=$uname','_self');</script>";

}
else{ 
   
  header("location:login.php?error=1");
}
$c->close();
?>