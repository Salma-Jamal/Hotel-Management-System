<?php 
include 'conn.php';
try{
    if(isset($_POST['submit'])){
  $srname =$_POST['srname'];
$comment=$_POST['comment'];  
    
    $sql="INSERT INTO `services`( `srname`, `comment`) VALUES ('$srname','$comment')";
    $conn->exec($sql);
    
        echo"inserted";
    
    
    
}
}
catch(PDOException $e){
    
    die("not inserted" . $e->getMessage());
    
}
unset($conn);

?>