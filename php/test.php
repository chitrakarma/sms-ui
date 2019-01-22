<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=student", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection established";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $sql = "CREATE TABLE studentData (
        firstName VARCHAR(20),
        lastName VARCHAR(20),
        contact NUMERIC(15),
        email VARCHAR(40),
        username VARCHAR(30),
        pass VARCHAR(20),
        dob DATE,
        addr TEXT(256),
        pincode NUMERIC(6),
        altContact NUMERIC(15)
    );";
    $conn->exec($sql);
?> 