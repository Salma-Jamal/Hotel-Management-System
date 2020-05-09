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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        
        
       <footer class="site-footer">
       <h1 class="h1footer">FIVE STAR HOTEL</h1>
       <a href="#" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-twitter"></a>
       <a href="#" class="fa fa-instagram"></a>
       
        <span class="footerabout">ABOUT US</span>
        <p class="footerabout2">Five Star Hotel : A hotel where you find comfort,
        relaxation and <br> well-being of all kinds of service
        Distinguished service characterized<br> by high quality
        service makes life simpler services for the well-being
        <br>We give pleasure at our hotel Reserve Room for your Family Vacation
        and<br>Best Place To Enjoy Your Life</p>
        
        <span class="contactfooter">CONTACT</span>
        <p class="contactfooter2">
            Far Far Away, Behind The Word Mountains,<br>
            Far From The Countries Vokalia And Consonantia,<br>
            There Live The Blind Texts.<br>
            Address: 198 West 21th Street, Suite 721 New York NY 10016<br>
            Number: +201114004280
        </p>
      
       </footer> 
        
        
        
        
        
        
        
  </body> 
        
</html>