<?php

if (isset($_GET['$cgpa'])){

    $filename ="Above_" . $_GET ['$cgpa']."CGPA_cse.xls";
    $cgpa=$_GET['$cgpa'];
    header("Content-Disposition: attachement; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $link = mysqli_connect('localhost','root','','placement');
    
    $query = "SELECT  * from register WHERE cgpa>=$cgpa";
    $result = mysqli_query($link,$query);

    if(mysqli_num_rows($result)>0){

        $heading = false;
        while($row=mysqli_fetch_assoc($result)){

            if(!$heading){
                echo implode("\t",array_keys($row)) . "\r\n";
                $heading = true;
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }
    }
}

?>