<?php
 
 $username = "root";
 $password = "";
 $server = 'localhost';
 $db = 'placement';
  
 $con = mysqli_connect($server,$username,$password,$db);

 if($con){
 }
 else{
     die("No Connection".mysqli_connect_error());
 }
?>