<?php

if (isset($_GET['$username'])){

    $filename =  $_GET ['$username'].".xls";
    $username=$_GET['$username'];
    header("Content-Disposition: attachement; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $link = mysqli_connect('localhost','root','','placement');
    
    $query = "SELECT  * from register WHERE regno='$username'";
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