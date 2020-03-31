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

/*
if(isset($_POST['submit'])){  
    
$srname=$_POST['srname'];
$comment=$_POST['comment'];
    echo $srname;
    echo $comment;
    
    $sql="INSERT INTO services( id,srname , comment) VALUES (,$srname,$comment)";
    if(mysqli_query($conn,$sql)){
        
        echo"inserted";
        
    }
    else{
        
        
        echo " not inserted".mysqli_error($conn);
    }
    mysqli_close($conn);
    
}
*/

?>