<?php
include'conn.php';
try{
if(isset($_POST['submit'])){
    
$name=$_POST['username'];    
$email=$_POST['email']; 
$comment=$_POST['comment'];
    
$sql = "INSERT INTO`com`( `username`, `email`, `comment`) VALUES ('$name','$email','$comment')";   
 $conn->exec($sql);
    echo "Records inserted successfully.";   
}
    
}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
unset($conn);







?>