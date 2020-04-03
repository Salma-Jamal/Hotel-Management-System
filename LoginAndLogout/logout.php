<?php
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['message']= "You are now logged out";
        header("location: home.php");

?>



       
        
     
            
        
        
        
    