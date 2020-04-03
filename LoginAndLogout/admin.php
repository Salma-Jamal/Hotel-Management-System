<?php
session_start();
?>


<!DOCTYPE html>
    <html>
     <head>
       <title></title>
      <link rel="stylesheet" type="text/css" href="style1.css">
      
       <style>
              
  body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openBut{
  position: fixed;
  top: 25px;
  left: 20px;
   
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 
        
            
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
        
        
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Rooms</a>
  <a href="#">See Complains</a>
  <a href="#">Add Receptionist</a>
  <a href="logout.php">Logout</a>
</div>



<span class="openBut" style="font-size:30px;cursor:pointer" onclick="openNav();">&#9776; </span>




<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
      
        
        
        
        
 <div><h4>Welcome <?php echo $_SESSION['username'];  ?> </h4></div>
        
      
       
 
        
        
       </body> 
        
        
        
        
        
        
        
    </html>