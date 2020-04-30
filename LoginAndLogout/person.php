<?php

class pesron
{
    
    public $uName;
    public $Pass;
 
  public function set_uname($name)
  {
    $this->uName = $name;
  }
  
  public function get_uname()
  {
    return $this->uName;
  }
  
 public function set_pass($pass)
 {
    $this->Pass = $pass;
  }
  
  public function get_pass()
  {
    return $this->Pass;
  }
 
 
public function Login($usr,$pass) {
    
     $db= mysqli_connect("localhost" , "root" , "", "hotel");
     $sql= "SELECT * FROM persons WHERE username='$usr' AND password='$pass' ";
     $result= mysqli_query($db,$sql);
     
     if(mysqli_num_rows($result) == 1)
      {
        if($usr == 'admin')
          {
             header("location: admin.php");
             $_SESSION['message'] = "You are now logged in";
             $_SESSION['username']= $usr;
          }
                      
        elseif($usr == 'recep')
           {
              header("location: receptionist.php");
              $_SESSION['message'] = "You are now logged in";
              $_SESSION['username']= $usr;
           }
      
        else
          {
              header("location: user.php");
              $_SESSION['message'] = "You are now logged in";
              $_SESSION['username']= $usr; 
          }
      }
        
     else
      {
        $_SESSION['message'] = "Username / Password incorrect"; 
      }
 }
  
  
      public function Logout()
      {
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['message']= "You are now logged out";
        header("location: home.php");
       
      }
     
  
}

?>
