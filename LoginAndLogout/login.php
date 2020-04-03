<?php

class pesron {
    
    public $uName;
    public $Pass;
 
  public function set_uname($name){
    $this->uName = $name;
  }
  
  public function get_uname(){
    return $this->uName;
  }
  
 public function set_pass($pass){
    $this->Pass = $pass;
  }
  
  public function get_pass(){
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
  
  
  
   public function Logout() {
       
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['message']= "You are now logged out";
        header("location: home.php");
       
      }
      
 
  
  
  
  
}



$db= mysqli_connect("localhost" , "root" , "", "hotel");
if (isset($_POST['login_btn']))
{
    session_start();
    $username  = mysqli_real_escape_string($db, $_POST['username']);
    $Password  = mysqli_real_escape_string($db, $_POST['password']);
    $Password  = md5($Password);
     
     $User = new pesron();
     $User->set_uname($username);
     $User->set_pass($Password);
     $User->Login($User->uName , $User->Pass);
}



?>


<!DOCTYPE html>
    <html>
     <head>
       <title></title>
       <link rel="stylesheet" type="text/css" href="style1.css"> 
     </head>   
       
       <body>
    
 <div class="header">
            <h1 class="fivestar">FIVE STAR</h1>
            
            	<ul class="menu" >
							<li class="home" ><a  href="index.html">HOME</a></li>
							<li class="services"><a  href="services.html">SERVICES</a></li>
							<li class="room" ><a href="room.html">ROOMS</a></li>
							<li class="contact"><a  href="contact.html">CONTACT</a></li>
				</ul>
        </div>
     
     
     
     
     
     
        
    <?php
         if(isset($_SESSION['message'])){
            echo "<div id='error_msg'>".$_SESSION['message']."</div>";
            unset($_SESSION['message']);
            
        }
        ?>
        
        <form method="post" action="login.php">
           <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="textInput"  placeholder="Username"></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" class="textInput" placeholder="Password"></td>
            </tr>
            
           
            
            <tr>
                <td></td>
                <td><input type="submit" name="login_btn" value="Login" class="btn" ></td>
            </tr>
            
           </table> 
            
            
        </form>
        
        
        
        
        
        
        
        
        
        
       </body> 
        
 </html>