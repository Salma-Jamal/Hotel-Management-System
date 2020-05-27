<?php
session_start();
require_once "classes/userClass.php";

if (isset($_POST['rgstr_btn']))
{
   $db= mysqli_connect("localhost" , "root" , "", "hotelmanagement");
   $username  = $_POST['username'];
   $password  = $_POST['password'];
   $password2 = $_POST['password2'];
   $e_mail = $_POST['email'];
   $phone_ = $_POST['phone'];
   
   if($password == $password2){
     $password = md5($password); // hash pass before storing
     $User = new user();
     $User->set_uname($username);
     $User->set_pass($password);
     $User->set_email($e_mail);
     $User->set_phone($phone_);
     #$_SESSION['user'] = serialize($User);
     $User->Register($User->uName , $User->Pass,$User->Email,$User->Phone);
    
   }
   
   else  {
            $_SESSION['message'] = "The two passwords do not match";
            
         }
  
}

?>



<!DOCTYPE html>
    <html>
     <head>
       <title>Register</title>
       <link rel="stylesheet" type="text/css" href="css/style1.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
  
   
   
       </style>
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
        
        <form  class="rgstr_form" method="post" action="Register.php">
           <table>
         
            <tr>
                <td class="r">USERNAME</td>
                <td><input type="text" name="username" class="textInput" placeholder="Enter Username"></td>
            </tr>
            
            <tr>
                <td class="r">PASSWORD</td>
                <td><input type="password" name="password" class="textInput" placeholder="Password"></td>
            </tr>
            
            <tr>
                <td class="r">RE-TYPE PASSWORD</td>
                <td><input type="password" name="password2" class="textInput" placeholder="Re-type Password"></td>
            </tr>
            
            <tr>
                <td class="r">EMAIL</td>
                <td><input type="text" name="email" class="textInput" placeholder="example@gmail.com"></td>
            </tr>
            
            <tr>
                <td class="r">PHONE</td>
                <td><input type="text" name="phone" class="textInput" placeholder="+01294859302"></td>
            </tr>
            
            
            <tr>
                <td></td>
                <td><input type="submit" name="rgstr_btn" class="rgstr_btn1" value="Register"></td>
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