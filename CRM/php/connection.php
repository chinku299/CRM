<?php
 
 try{
    $servername = "localhost";
    $dbname = "CRM";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=CRM",
        $username, $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>