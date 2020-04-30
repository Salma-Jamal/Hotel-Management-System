<?php
session_start();

?>

<!DOCTYPE html>
<html>
     <head>
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
        
       <div id="mySidenav" class="sidenav">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <a href="#">About</a>
           <a href="login.php">Login</a>
           <a href="#">Register</a>
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
       
        
        
        
        
    </body> 
        
        
</html>