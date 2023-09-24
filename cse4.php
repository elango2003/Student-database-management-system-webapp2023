<html>
<head>
    <title></title>
    <?php include 'links.php';?>
    <link rel="stylesheet" href="stastyle.css">
</head>
<body>
    <div class="main-div">

    <h1>List Of Student</h1>
    <div id="search">
        <form method="post" action="cgpacal2.php">
           <input type="submit" value="Search"><input type="text" name="cgpa" placeholder="cgpa(7.0)">
        </form>
    </div><br>

    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
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
                        <th>CGPA IN PERCENT</th>
                        <th>BREAK OF STUDY</th>
                        <th>HOSTELLER OR DAY SCHOLAR</th>
                        <th>PHYSICALLY DISABLED</th>
                        <th>FIRST GRADUATE</th>
                        <th>OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connection.php';

                    $year='4';
                    
                    $selectquery = "SELECT * from register WHERE year=$year";
                    
                    $query = mysqli_query($con,$selectquery);

                    $nums = mysqli_num_rows($query);

                    while($res = mysqli_fetch_array($query)){
                    ?>
                        <td><?php echo $res['name'];?></td>
                        <td><?php echo $res['gender'];?></td>
                        <td><?php echo $res['regno'];?></td>
                        <td><?php echo $res['dept'];?></td>
                        <td><?php echo $res['med'];?></td>
                        <td><?php echo $res['year'];?></td>
                        <td><?php echo $res['sem'];?></td>
                        <td><?php echo $res['DOB'];?></td>
                        <td><?php echo $res['age'];?></td>
                        <td><?php echo $res['address1'];?></td>
                        <td><?php echo $res['district'];?></td>
                        <td><?php echo $res['aadhar'];?></td>
                        <td><?php echo $res['contact1'];?></td>
                        <td class="email"><?php echo $res['email'];?></td>
                        <td><?php echo $res['fname'];?></td>
                        <td><?php echo $res['mname'];?></td>
                        <td><?php echo $res['pcontact'];?></td>
                        <td><?php echo $res['sslcm'];?></td>
                        <td><?php echo $res['sslc'];?></td>
                        <td><?php echo $res['sslcd'];?></td>
                        <td><?php echo $res['sslcme'];?></td>
                        <td><?php echo $res['hscm'];?></td>
                        <td><?php echo $res['hsc'];?></td>
                        <td><?php echo $res['hscd'];?></td>
                        <td><?php echo $res['hscme'];?></td>
                        <td><?php echo $res['dd'];?></td>
                        <td><?php echo $res['dp'];?></td>
                        <td><?php echo $res['dda'];?></td>
                        <td><?php echo $res['sem1'];?></td>
                        <td><?php echo $res['sem2'];?></td>
                        <td><?php echo $res['sem3'];?></td>
                        <td><?php echo $res['sem4'];?></td>
                        <td><?php echo $res['sem5'];?></td>
                        <td><?php echo $res['sem6'];?></td>
                        <td><?php echo $res['sem7'];?></td>
                        <td><?php echo $res['sem8'];?></td>
                        <td><?php echo $res['asem1'];?></td>
                        <td><?php echo $res['asem2'];?></td>
                        <td><?php echo $res['asem3'];?></td>
                        <td><?php echo $res['asem4'];?></td>
                        <td><?php echo $res['asem5'];?></td>
                        <td><?php echo $res['asem6'];?></td>
                        <td><?php echo $res['asem7'];?></td>
                        <td><?php echo $res['asem8'];?></td>
                        <td><?php echo $res['cgpa'];?></td>
                        <td><?php echo $res['ug'];?></td>
                        <td><?php echo $res['bos'];?></td>
                        <td><?php echo $res['hord'];?></td>
                        <td><?php echo $res['physical'];?></td>
                        <td><?php echo $res['fg'];?></td>
                        <td><i class="fa fa-edit" aria-hidden="true"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <i class="fa fa-trash" aria-hidden="true"></i></td>
                    </tr>
                    <?php
                    }    
                    ?>
                </tbody>
            </table>

        </div>
    </div>


    </div>


</body>

</html>