<?php
    $servername = "localhost";
    $username = "chitrakarma";
    $password = "TdLlE8jYfB9uZW8U";
    $conn = mysqli_connect($servername, $username, $password);
    $conn->select_db("student"); 
    if($conn->errno){
        echo "Unable to connect";
    }
?> 