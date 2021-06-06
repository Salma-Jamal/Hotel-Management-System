<?php
session_start();
require_once 'activity.php';

if(isset($_POST['show_Class']))
{

$name_gust=$_POST['floor']; 

$activ = new Activity();
$activ->show_names($name_gust);    
}


?>

<html>
<head>
  <link rel="stylesheet" href="showStyle2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
<body>
  

    <form class="foorm" action="showActivity.php" method="POST">
      <label class="nameguest">Name Of The Guest </label>
      <input type="text"  name="floor" class="Class_Input"  placeholder="Enter Name" >
      <input type="submit" name="show_Class" type="button" value="Show" class="btn" >
    </form>
    
         
     <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <button class="logoutBtn" onclick="goBack();"><i class="fa fa-home"></i></button>
     </div>
     
     
     <script>
       function goBack()
      {
       window.location="../LoginAndLogout/receptionist.php";
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
