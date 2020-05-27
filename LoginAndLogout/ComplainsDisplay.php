<?php
session_start();
require_once('classes/AdminClass.php');
if(!$_SESSION["username"]=='admin')
{
     header("Location:home.php"); 
     exit; 
}
?>

<html>
  <head>
       <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
       <title>Complains</title>
       <link rel="stylesheet" type="text/css" href="css/complainTable1.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
        
       </style>
     </head>
    
    <body>
    <div class="header">
     <h1>
       clients complains
     </h1>   
    </div>    
     
           
<?php

   $User = new admin();
   $User->showComplains();   

 ?>   
    
       
     <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <button class="logoutBtn" onclick="goBack();"><i class="fa fa-home"></i></button>
     </div>
     
     <script>
       function goBack()
      {
       window.history.back();
      }
      
     </script>
  
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