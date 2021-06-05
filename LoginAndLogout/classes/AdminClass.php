<?php

require_once 'person1.php';
include_once('../Room/DataBase.php');
include_once 'adapter.php';


class admin extends person1 implements Redirect,show_all
{
    private static $single;
 
     public static function getInstance()
    {
        if(self::$single==NULL)
        {
            self::$single=new admin();
        }
        return self::$single;
    }
 
 
 
    public function redirectLogin($usr)
    {
      header("location: admin.php");
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['username']= $usr;
    }
    

         public function show($type)
        {
		   $Base=DataBase::getInstance();
           $result = $Base->showComplains();
           echo"<div class='table1'>";
           echo "<table>";
           echo"<tr><th>" . 'Username' . "</th><th>" . 'Email'. "</th><th>". 'comment' . "</th></tr>";  
           while($row = mysqli_fetch_array($result))
           {   
             echo "<tr><td>" . $row['username'] . "</td><td>". $row['email'] . "</td><td>" . $row['comment']. "</td></tr>";  
           }
           echo "</table>";
           echo"</div>";

       }
          
          
                  

    
     
}







?>