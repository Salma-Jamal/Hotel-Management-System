<?php
session_start();
require_once('person.php');
if(!$_SESSION["username"])
{
     header("Location:home.php");
     exit; 
}
?>

<!DOCTYPE html>
<html>
    <head>
       <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
       <title></title>
       <link rel="stylesheet" type="text/css" href="style.css">
       <style></style>
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
        
        if(isset($_GET['LOGOUT']))
         {
          logOut();
         }
        
        function logOut()
         {
          $User = unserialize( $_SESSION['encoded_User']);
          $User->Logout();
         }
       ?>
        
      <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="../com/com.php">Complain</a>
         <a href="../booking/booking.php">Book A Room</a>
         <a href="../ahmed/register.php">Services</a>
         <button class="logoutBtn" name="logoutBtn" onClick='location.href="?LOGOUT"'>Logout</button>
      </div>

      <span class="openBut" style="font-size:30px;cursor:pointer" onclick="openNav();">&#9776; </span>
      <script>
         function openNav()
          {
            document.getElementById("mySidenav").style.width = "250px";
          }

        function closeNav()
        {
            document.getElementById("mySidenav").style.width = "0";
        }
      </script> 
        
        
     <div><h4>Welcome <?php echo $_SESSION['username'];  ?> </h4></div>
        
      
            
        
    </body> 
        
        
        
        
        
        
</html>