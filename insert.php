<?php 
include 'conn.php';

try{
if(isset($_POST['submit'])){
    
$name=$_POST['name'];    
$email=$_POST['email']; 
$phone=$_POST['phone'];
$country=$_POST['country'];       
$arrival=$_POST['arrival'];    
$departure=$_POST['departure']; 
$room=$_POST['typeroom'];     
   $sql = "INSERT INTO`booking`( `name`, `email`, `phone`, `country`, `arrvial`, `departure`, `typeroom`) VALUES ('$name','$email','$phone','$country','$arrival','$departure','$room')";
 $conn->exec($sql);
    echo "Records inserted successfully.";   
}
    
}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
unset($conn);






?>