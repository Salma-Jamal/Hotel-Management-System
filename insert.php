<?php 
include 'conn.php';

if(isset($_POST['submit'])){
    
$name=$_POST['name'];    
$email=$_POST['email']; 
$phone=$_POST['phone'];
$country=$_POST['country'];       
$arrival=$_POST['arrival'];    
$departure=$_POST['departure']; 
$room=$_POST['typeroom'];     
   $sql = "INSERT INTO booking ( name,email, phone,country,arrvial,departure,typeroom) VALUES ($name,$email,$phone,$country,$arrival,$departure,$room)";
    
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);                 
    
    
}






?>