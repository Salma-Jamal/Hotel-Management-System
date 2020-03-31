<?php 

try{
    $conn = new PDO("mysql:host=localhost;dbname=hotel", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected";
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}



?>