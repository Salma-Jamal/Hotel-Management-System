<?php
session_start();

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
        
       
       
       <div><h4>Welcome <?php echo $_SESSION['username'];  ?> </h4></div>
        
       <div ><a  href="logout.php">Logout</a></div>    
            
        
        
        
       </body> 
        
        
        
        
        
        
        
    </html>