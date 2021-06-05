<?php
require_once 'classes/person1.php';


class recep extends person1 implements Redirect
{
    
     
   public function redirectLogin($usr)
    {
      header("location: receptionist.php");
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['username']= $usr;
    }
    
    
    
       
}
















?>