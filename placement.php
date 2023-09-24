<?php
$conn = new mysqli("localhost","root","","placement");

if ($conn->connect_error){
	die('Connection Failed'.$conn->connect_error);
}

  $name  = $_POST['name'];
  $gender  = $_POST['gender'];
  $regno  = $_POST['regno'];
  $dept  = $_POST['dept'];
  $med  = $_POST['med'];
  $year  = $_POST['year'];
  $sem  = $_POST['sem'];
  $DOB  = $_POST['DOB'];
  $age  = $_POST['age'];
  $address1  = $_POST['address1'];
  $district  = $_POST['district'];
  $aadhar  = $_POST['aadhar'];
  $contact1  = $_POST['contact1'];
  $email  = $_POST['email'];
  $fname  = $_POST['fname'];
  $mname  = $_POST['mname'];
  $pcontact  = $_POST['pcontact'];
  $sslcm  = $_POST['sslcm'];
  $sslc  = $_POST['sslc'];
  $sslcd  = $_POST['sslcd'];
  $sslcme  = $_POST['sslcme'];
  $hscm  = $_POST['hscm'];
  $hsc  = $_POST['hsc'];
  $hscd  = $_POST['hscd'];
  $hscme  = $_POST['hscme'];
  $dd  = $_POST['dd'];
  $dp  = $_POST['dp'];
  $dda  = $_POST['dda'];
  $ug  = $_POST['ug'];
  $sem1  = $_POST['sem1'];
  $sem2  = $_POST['sem2'];
  $sem3  = $_POST['sem3'];
  $sem4  = $_POST['sem4'];
  $sem5  = $_POST['sem5'];
  $sem6  = $_POST['sem6'];
  $sem7  = $_POST['sem7'];
  $sem8  = $_POST['sem8'];
  $asem1  = $_POST['asem1'];
  $asem2  = $_POST['asem2'];
  $asem3  = $_POST['asem3'];
  $asem4  = $_POST['asem4'];
  $asem5  = $_POST['asem5'];
  $asem6  = $_POST['asem6'];
  $asem7  = $_POST['asem7'];
  $asem8  = $_POST['asem8'];
  $cgpa  = $_POST['cgpa'];
  $bos  = $_POST['bos'];
  $hord  = $_POST['hord'];
  $physical  = $_POST['physical'];
  $fg  = $_POST['fg'];
  $sql =  "INSERT INTO register(name,gender,regno,dept,med,year,sem,DOB,age,address1,district,aadhar,contact1,email,fname,mname,pcontact,sslcm,sslc,sslcd,sslcme,hscm,hsc,hscd,hscme,dd,dp,dda,ug,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,asem1,asem2,asem3,asem4,asem5,asem6,asem7,asem8,cgpa,bos,hord,physical,fg) values('$name' , '$gender' , '$regno' , '$dept' , '$med'  , '$year'  , '$sem'  , '$DOB'  , '$age'  , '$address1'  , '$district'  , '$aadhar'  , '$contact1'  , '$email'  , '$fname'  , '$mname'  , '$pcontact'  , '$sslcm'  , '$sslc'  , '$sslcd'  , '$sslcme'  , '$hscm'  , '$hsc'  , '$hscd'  , '$hscme'  , '$dd'  , '$dp'  , '$dda'  , '$ug'  , '$sem1'  , '$sem2'  , '$sem3'  , '$sem4'  , '$sem5'  , '$sem6'  , '$sem7'  , '$sem8'  , '$asem1'  , '$asem2'  , '$asem3'  , '$asem4'  , '$asem5'  , '$asem6' , '$asem7'  , '$asem8'  , '$cgpa'  , '$bos'  , '$hord'  , '$physical' , '$fg' )";
  if (mysqli_query($conn,$sql)){
  ?>
  <script>
    alert('Data Stored Successfully')
  </script>
  <?php
    header('location: login.php');  
  }

  
  else{
    echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
  }
  $conn->close();
  ?>
  