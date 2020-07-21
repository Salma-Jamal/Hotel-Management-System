<?php 
include 'conn.php';

try{
if(isset($_POST['reg_user'])){
    
$name=$_POST['username'];    
$email=$_POST['email']; 
$password=$_POST['password'];
    
   $sql = "INSERT INTO `register`( `username`, `email`, `password`) VALUES ('$name','$email','$password')";
 $conn->exec($sql);
     header('location:index.php');
    
}
    
}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
unset($conn);






?>