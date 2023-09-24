<html>
<head>
	<style>
	
		
table{
    border-collapse: collapse;
	background: -webkit-linear-gradient(left,#e25d94,#f389f7,#92f6fa,#9bedf3);
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 5px;
    margin: auto;   
}
th,td{
    
    padding: 8px 30px;
    text-align: center;
    color: black;
	font-family: ;
}
th{
    text-transform: uppercase;
    
}
td{
    font-size: 15px;
    text-transform: uppercase;
	text-align:left;
}
.email{
	text-transform:lowercase;
}
h1{
		
}
	
	#login{
		background: linear-gradient(to left,violet,orange);
	
	}
	.export-container{
    margin-top: 20px;
    margin-bottom: 50px;
    
}
.btn{
    padding:10px 20px;
    background-color: rgb(85, 250, 200);
	size:30px;
	border-radius:10px;
	border:1px solid pink;
    
}
.btn a{
    color: #000000;
    font-family:sans-serif;
    text-decoration: none;
	font-size:18px;
}	

	</style>
</head>	
<body id=login>

</body>
</html>	
<?php
$conn =  new mysqli('localhost','root','','placement') or die('connection faild');
if ($conn->connect_error){
	die('Connection failed'.$conn->connect_error);
}
$username=$_GET['register'];
$getlogin="SELECT * FROM register WHERE regno='$username'";

$result=mysqli_query($conn,$getlogin);

while($row = mysqli_fetch_array($result)){
	echo "<center>";
	echo "<form><h1> Student Profile </h1>";
	echo "<table>";
	echo "<tr><td><h2>NAME      </td>"; echo "<td><h3>"; echo $row["name"]."</td></tr>";
	echo "<tr><td><h2>GENDER       </td>"; echo "<td><h3>"; echo $row["gender"]."</td></tr>";
	echo "<tr><td><h2>REGISTER NUMBER </td>"; echo "<td><h3>"; echo $row["regno"]."</td></tr>";
	echo "<tr><td><h2>DEPARTMENT      </td>"; echo "<td><h3>"; echo $row["dept"]."</td></tr>";
	echo "<tr><td><h2>MEDIUM         </td>"; echo "<td><h3>"; echo $row["med"]."</td></tr>";
	echo "<tr><td><h2>CURRENT YEAR        </td>"; echo "<td><h3>"; echo $row["year"]."</td></tr>";
	echo "<tr><td><h2>CURRENT SEMESTER          "; echo "<td><h3>"; echo $row["sem"]."</td></tr>";
	echo "<tr><td><h2>DATE OF BIRTH             "; echo "<td><h3>"; echo $row["DOB"]."</td></tr>";
	echo "<tr><td><h2>AGE   </td>"; echo "<td><h3>"; echo $row["age"]."</td></tr>";
	echo "<tr><td><h2>ADDRESS   </td>"; echo "<td><h3>"; echo $row["address1"]."</td></tr>";
	echo "<tr><td><h2>DISTRICT      </td>"; echo "<td><h3>"; echo $row["district"]."</td></tr>";
	echo "<tr><td><h2>AADHAR     </td>"; echo "<td><h3>"; echo $row["aadhar"]."</td></tr>";
	echo "<tr><td><h2>CONTACT  </td>"; echo "<td><h3>"; echo $row["contact1"]."</td></tr>";
	echo "<tr><td><h2>EMAIL     </td>"; echo "<td class=email><h3>"; echo $row["email"]."</td></tr>";
	echo "<tr><td><h2>FATHER NAME     </td>"; echo "<td><h3>"; echo $row["fname"]."</td></tr>";
	echo "<tr><td><h2>MOTHER NAME </td>"; echo "<td><h3>"; echo $row["mname"]."</td></tr>";
	echo "<tr><td><h2>PARENT CONTACT </td>"; echo "<td><h3>"; echo $row["pcontact"]."</td></tr>";
    echo "<tr><td><h2>FIRST GRADUATE   </td>"; echo "<td><h3>"; echo $row["fg"]."</td></tr>";
	echo "<tr><td><h2>SSLC MARK </td>"; echo "<td><h3>"; echo $row["sslcm"]."</td></tr>";
	echo "<tr><td><h2>SSLC PERCENT </td>"; echo "<td><h3>"; echo $row["sslc"]."</td></tr>";
	echo "<tr><td><h2>SSLC DAY OF PASSING   </td>"; echo "<td><h3>"; echo $row["sslcd"]."</td></tr>";
	echo "<tr><td><h2>SSLC MEDIUM        </td>"; echo "<td><h3>"; echo $row["sslcme"]."</td></tr>";
	echo "<tr><td><h2>HSC MARK         </td>"; echo "<td><h3>"; echo $row["hscm"]."</td></tr>";
	echo "<tr><td><h2>HSC PERCENT   </td>"; echo "<td><h3>"; echo $row["hsc"]."</td></tr>";
	echo "<tr><td><h2>HSC DAY OF PASSING      </td>"; echo "<td><h3>"; echo $row["hscd"]."</td></tr>";
	echo "<tr><td><h2>HSC MEDIUM          </td>"; echo "<td><h3>"; echo $row["hscme"]."</td></tr>";
	echo "<tr><td><h2>DIPLOMA        </td>"; echo "<td><h3>"; echo $row["dd"]."</td></tr>";
	echo "<tr><td><h2>DIPLOMA PERCENT        </td>"; echo "<td><h3>"; echo $row["dp"]."</td></tr>";
	echo "<tr><td><h2>DIPLOMA PASSING DATE            </td>"; echo "<td><h3>"; echo $row["dda"]."</td></tr>";
	echo "<tr><td><h2>SEM1 CGP   </td>"; echo "<td><h3>"; echo $row["sem1"]."</td></tr>";
	echo "<tr><td><h2>SEM2 CGP </td>"; echo "<td><h3>"; echo $row["sem2"]."</td></tr>";
	echo "<tr><td><h2>SEM3 CGP    </td>"; echo "<td><h3>"; echo $row["sem3"]."</td></tr>";
	echo "<tr><td><h2>SEM4 CGP   </td>"; echo "<td><h3>"; echo $row["sem4"]."</td></tr>";
	echo "<tr><td><h2>SEM5 CGP     </td>"; echo "<td><h3>"; echo $row["sem5"]."</td></tr>";
	echo "<tr><td><h2>SEM6 CGP     </td>"; echo "<td><h3>"; echo $row["sem6"]."</td></tr>";
	echo "<tr><td><h2>SEM7 CGP </td>"; echo "<td><h3>"; echo $row["sem7"]."</td></tr>";
	echo "<tr><td><h2>SEM8 CGP </td>"; echo "<td><h3>"; echo $row["sem8"]."</td></tr>";
	echo "<tr><td><h2>SEM1 ARREAR(IF AVAILABLE)   </td>"; echo "<td><h3>"; echo $row["asem1"]."</td></tr>";
	echo "<tr><td><h2>SEM2 ARREAR(IF AVAILABLE) </td>"; echo "<td><h3>"; echo $row["asem2"]."</td></tr>";
	echo "<tr><td><h2>SEM3 ARREAR(IF AVAILABLE)    </td>"; echo "<td><h3>"; echo $row["asem3"]."</td></tr>";
	echo "<tr><td><h2>SEM4 ARREAR(IF AVAILABLE)   </td>"; echo "<td><h3>"; echo $row["asem4"]."</td></tr>";
	echo "<tr><td><h2>SEM5 ARREAR(IF AVAILABLE)     </td>"; echo "<td><h3>"; echo $row["asem5"]."</td></tr>";
	echo "<tr><td><h2>SEM6 ARREAR(IF AVAILABLE)     </td>"; echo "<td><h3>"; echo $row["asem6"]."</td></tr>";
	echo "<tr><td><h2>SEM7 ARREAR(IF AVAILABLE) </td>"; echo "<td><h3>"; echo $row["asem7"]."</td></tr>";
	echo "<tr><td><h2>SEM8 ARREAR(IF AVAILABLE) </td>"; echo "<td><h3>"; echo $row["asem8"]."</td></tr>";
	echo "<tr><td><h2>CGPA TILL YOUR PREVIOUS SEMESTER </td>"; echo "<td><h3>"; echo $row["cgpa"]."</td></tr>";
    echo "<tr><td><h2>CGPA IN PERCENT     </td>"; echo "<td><h3>"; echo $row["ug"]."</td></tr>";
	echo "<tr><td><h2>BREAK OF STUDY    </td>"; echo "<td><h3>"; echo $row["bos"]."</td></tr>";
	echo "<tr><td><h2>HOSTELLER OR DAY SCHOLAR   </td>"; echo "<td><h3>"; echo $row["hord"]."</td></tr>";
    echo "<tr><td><h2>PHYSICALLY DISABLED   </td>"; echo "<td><h3>"; echo $row["physical"]."</td></tr>";
	echo "</table>";
    
}
?><?php
$url_prameters='$username=' . $username;
echo'<div class = "export-container">';
		echo '<center>
					  <button class = "btn">
						  <a href="studown.php?'.$url_prameters . '">Download</a>

					  </button>
			  </center>';
	   echo'</div>';
	  ?>