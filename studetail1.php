<?php
   session_start();
   $rno = $_POST['register'];
   $pw = $_POST['pass'];
 $c=new mysqli("localhost","root","","placement") or die('connection failed');
 $q="SELECT * from register where regno='$rno' and DOB='$pw'";
 $result=mysqli_query($c,$q);
 $count=mysqli_num_rows($result);
 if ($count>0) {
  
	echo "<script> window.open('studetail2.php?register=$rno','_self');</script>";

}
else{ 
   
  header("location:login.php?error=1");
}
$c->close();
?>