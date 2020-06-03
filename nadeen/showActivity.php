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
  <link rel="stylesheet" href="showstyle.css">

    
  </head>
<body>
  

    <form class="foorm" action="showActivity.php" method="POST">
      <label class="nameguest">Name Of The Guest </label>
      <input type="text"  name="floor" class="Class_Input"  placeholder="Enter Name" >
      <input type="submit" name="show_Class" type="button" value="Show" class="btn" >
    </form>


</body>
 </html>
