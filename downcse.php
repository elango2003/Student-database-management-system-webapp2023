<?php

if (isset($_GET['filename'])){

    $filename = $_GET ['filename'].".xls";
    header("Content-Disposition: attachement; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-pdf");

    $link = mysqli_connect('localhost','root','','placement');
    $query = "SELECT  * from register";
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