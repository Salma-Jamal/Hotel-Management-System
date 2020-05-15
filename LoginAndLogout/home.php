<?php
session_start();

?>

<!DOCTYPE html>
<html>
     <head>
       <title>Five Star Hotel</title>
       <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
     </style>
       
     </head>   
       
    <body>
        
        <div class="header">
            <h1 class="fivestar">FIVE STAR</h1>
            <ul class="menu" >
							<li class="home" ><a  href="#">HOME</a></li>
							<li class="services"><a  href="#">SERVICES</a></li>
							<li class="room" ><a href="#">ROOMS</a></li>
							<li class="contact"><a  href="#">CONTACT</a></li>
				    </ul>
        </div>
        
       <div id="mySidenav" class="sidenav">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <a href="#">ABOUT</a>
           <a href="login.php">LOGIN</a>
           <a href="#">REGISTER</a>
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
       
       <p class="midTitle"><span>Five Star Hotel</span></p>
       <h2 class="mid2">Make Your Vacation Comfortable</h2>
       <a href="../booking/booking.php" class="btnbook">Book Now</a>
       
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