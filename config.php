<?php 
    $con = mysqli_connect("localhost","root","","loan"); 

    if(!$con) {
        echo "<h1>Database is not connected ! </h1>"; 
        die(); 
    }
    $com['name'] ="Company Name"; 
    $com['phone'] ="+91 7478596100"; 
    

?>