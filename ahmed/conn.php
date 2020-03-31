<?php

try{
    
    $conn= new PDO("mysql:host=localhost;dbname=hotel","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    echo ("connected");
    
}catch(PDOException $e){
    
    die("not connected");
}

/*
$name="localhost";
$username="root";
$password="";
$dname="hotel";

$conn=mysqli_connect($name,$username,$password,$dname);
if(!$conn){
    echo" not connected";
    
}else
{
    
    echo " connected";
}
*/




?>