<?php
session_start();
include ('person.php');


if (isset($_POST['login_btn']))
{
   $db= mysqli_connect("localhost" , "root" , "", "hotel");
   $username  = mysqli_real_escape_string($db, $_POST['username']);
   $Password  = mysqli_real_escape_string($db, $_POST['password']);
   $Password  = md5($Password);
   
   $User = new pesron();
   $User->set_uname($username);
   $User->set_pass($Password);
   $_SESSION['encoded_User'] = serialize($User);
   $User->Login($User->uName , $User->Pass);
}



?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
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
   if(isset($_SESSION['message']))
     {
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