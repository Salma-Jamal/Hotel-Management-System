<?php
require_once 'classes/person1.php';

class user extends person1
{
    
    public function Register($usr,$pass,$email,$phone)
    {
     
      $db= mysqli_connect("localhost" , "root" , "", "hotel");
      $sql = "INSERT INTO `persons` (`id`, `username`, `password`, `email`, `phone`) VALUES ('', '$usr', '$pass', '$email', '$phone')";
         mysqli_query($db, $sql);
         $_SESSION['message'] = "Registered Successfully!";
         header("location: home.php");// redirect to home page
    }
    
    public function Rate($roomNo,$floor,$roomType,$rate)
    {
     
      $db= mysqli_connect("localhost" , "root" , "", "hotel");
      $sql = "INSERT INTO `ratings` (`roomNo`, `floor`, `roomType`, `rate`) VALUES ('$roomNo', '$floor', '$roomType', '$rate')";
         mysqli_query($db, $sql);
         $_SESSION['message'] = "Rated Successfully!";
         #header("location: RateRoom.php");// redirect to home page
    }
       
}
















?>