<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="login">
	<img src="ucealogo.png" class="ucealogo">
	<div class="loginbanner">
		<h1>UNIVERSITY COLLEGE OF ENGINEERING ARNI</h1>
		<p>If Opportunity Doesn't Knock,Build A Door</p>
	</div>
	<div id="sections">
	<section id="stafflogin">
	<div class="stalogin">
		<form name="staff" action="staffcheck.php" method="post">
			<fieldset class="fieldset1">
				<p  style="font-size: 28px; color: rgb(0, 0, 0); margin-bottom: 15px; text-shadow: 2px 2px 10px #fff;"><b>Staff Login</b></p>
				<p><span class="user"></span><input type="text" name="staffid" id="staffid" maxlength="32"placeholder="Enter user name" required/></p>
				<p><span class="loc"></span><input type="password" name="pass" maxlength="20" id="pwrd"placeholder="Enter password" required/></p>
				<p><input type="submit" value="Proceed" style="cursor: pointer;"></p>
			</fieldset>		
        </form>
	</div>
	</section>
	<section id="stulogin">
	<div class="studentlogin">
		<form name="student" action="studetail1.php" method="post">
			<fieldset class="fieldset2">
				<p  style="font-size: 28px; color: rgb(0, 0, 0); margin-bottom: 15px; text-shadow: 2px 2px 10px #fff;"><b>Student Login</b></p>
				<p><span class="user"></span><input type="text" name="register" id="stureg" maxlength="25"placeholder="Enter your Register Number" required/></p>
				<p><span class="cal"></span><input type="date" name="pass" id="dob" required/></p>
				<p><input type="submit" value="Proceed" style="cursor: pointer;"></p>
				<?php
					if(isset($_GET['error'])==true){
					echo'<p style="text-decoration: none; font-size:20px; color: #FF0000;  align= "center";">userid or password mismatch</p></font>';
					}
				?><br>
				<p class="reg">If Not Exist?<a href="stureg.html" style="text-decoration: none; color: rgb(0, 0, 0);"> Register Here..</a></p>
			</fieldset>		
        </form>
		
	</div>
	</section>
</div>
</body>
</html>