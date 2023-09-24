<html>
<head>
</head>
<body>
<table>
    <tr>
        <th>NAME</th>
        <th>GENDER</th>
        <th>REGISTER NUMBER</th>
        <th>DEPARTMENT</th>
        <th>MEDIUM</th>
        <th>CURRENT YEAR</th>
        <th>SEMESTER</th>
        <th>DATE OF BIRTH</th>
        <th>AGE</th>
        <th>ADDRESS</th>
        <th>DISTRICT</th>
        <th>AADHAR</th>
        <th>CONTACT</th>
        <th>EMAIL</th>
        <th>FATHER NAME</th>
        <th>MOTHER NAME</th>
        <th>PARENT PHONE</th>
        <th>SSLC MARK</th>
        <th>SSLC PERCENT</th>
        <th>DAY OF PASSING SSLC</th>
        <th>SSLC MEDIUM</th>
        <th>HSC MARK</th>
        <th>HSC PERCENT</th>
        <th>DAY OF PASSSING HSC</th>
        <th>HSC MEDIUM</th>
        <th>DIPLOMA DEPT</th>
        <th>DIPLOMA PERCENT</th>
        <th>DAY OF PASSING DIPLOMA</th>
        <th>BE PERCENT</th>
        <th>SEM1</th>
        <th>SEM2</th>
        <th>SEM3</th>
        <th>SEM4</th>
        <th>SEM5</th>
        <th>SEM6</th>
        <th>SEM7</th>
        <th>SEM8</th>
        <th>SEM1 ARREAR</th>
        <th>SEM2 ARREAR</th>
        <th>SEM3 ARREAR</th>
        <th>SEM4 ARREAR</th>
        <th>SEM5 ARREAR</th>
        <th>SEM6 ARREAR</th>
        <th>SEM7 ARREAR</th>
        <th>SEM8 ARREAR</th>
        <th>CGPA</th>
        <th>BREAK OF STUDY</th>
        <th>HOSTELLER OR DAY SCHOLAR</th>
        <th>PHYSICALLY DISABLED</th>
        <th>FIRST GRADUATE</th>
    </tr>
    <?php
        $conn = mysqli_connect("localhost","root","","placement");
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
        }

        $sql = "SELECT * FROM register";
        
        $result = $conn->query($sql);

       

        if(!$result){
            die("invalid query:" .$conn->error);
        }

            while($row = $result->fetch_assoc()){
              echo"<tr><td>" .$row["name"]."</td><td>" .$row["gender"]."</td><td>" .$row["regno"]."</td><td>" .$row["dept"]."</td><td>" .$row["med"]."</td><td>" .$row["year"]."</td><td>" .$row["sem"]."</td><td>" .$row["DOB"]."</td><td>" .$row["age"]."</td><td>" .$row["address1"]."</td><td>" .$row["district"]."</td><td>" .$row["aadhar"]."</td><td>" .$row["contact1"]."</td><td>" .$row["email"]."</td><td>" .$row["fname"]."</td><td>" .$row["mname"]."</td><td>" .$row["pcontact"]."</td><td>" .$row["sslcm"]."</td><td>" .$row["sslc"]."</td><td>" .$row["sslcd"]."</td><td>" .$row["sslcme"]."</td><td>" .$row["hscm"]."</td><td>" .$row["hsc"]."</td><td>" .$row["hscd"]."</td><td>" .$row["hscme"]."</td><td>" .$row["dd"]."</td><td>" .$row["dp"]."</td><td>" .$row["dda"]."</td><td>" .$row["ug"]."</td><td>" .$row["sem1"]."</td><td>" .$row["sem2"]."</td><td>" .$row["sem3"]."</td><td>" .$row["sem4"]."</td><td>" .$row["sem5"]."</td><td>" .$row["sem6"]."</td><td>" .$row["sem7"]."</td><td>" .$row["sem8"]."</td><td>" .$row["asem1"]."</td><td>" .$row["asem2"]."</td><td>" .$row["asem3"]."</td><td>" .$row["asem4"]."</td><td>" .$row["asem5"]."</td><td>" .$row["asem6"]."</td><td>" .$row["asem7"]."</td><td>" .$row["asem8"]."</td><td>" .$row["cgpa"]."</td><td>" .$row["bos"]."</td><td>" .$row["hord"]."</td><td>" .$row["physical"]."</td><td>" .$row["fg"]."</td></tr>";  
            }
            echo"</table>";
        
      

        $conn-> close();
    ?>    
        
</table>
</body>
</html>





























