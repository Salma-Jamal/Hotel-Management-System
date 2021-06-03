<?php
session_start();
require_once 'activity.php';

if(isset($_POST['submit_Class']))
{

$id_room=$_POST['name'];
$name_gust=$_POST['floor']; 
$Type_sport =$_POST['selectList'];

$activ = new Activity();

$activ->setid_room($id_room);
$activ->setname_of_gust($name_gust);
$activ->settyp_sport($Type_sport );

$activ->choose_activity($id_room, $name_gust, $Type_sport);
       
}

?>

<html>
<head>
  <link rel="stylesheet" href="Add_Room.css">
    


    
  </head>
<body>
  <div class="contain">
    <div class="Add">
      <span>
      For choose Activity
      </span>
    <form class="foorm" action="activityht.php" method="POST">
    <div class="form">
      <div class="Class_name">
        <label>Number of room  </label>
        <input type="text" name="name" class="Class_Input" placeholder="Enter Room number"  title="you should enter valid class name">

	  </div>
      <br><br>
      <div class="Floor">
      <label>Name of guest </label>
      <input type="text"  name="floor" class="Class_Input"  placeholder="Enter username" >
       </div>
       <br>
       <div class="Bulid_Name">
         <label> Type of sport </label>
           
           <select name="selectList" class="Class_Input" >
              <option value="swimming">swimming</option>
              <option value="tennis">tennis</option>
              <option value="massage">massage</option>
           </select>
       </div>

       <br>
       <div class="submit">
         <div class="Add">  <input type="submit" name="submit_Class"  value="Add" > </div>
         <div class="cancel"> <input type="reset" value="Cancel" > </div>
          
      </div>
    </div>

  </form>

  </div>
 </body>
 </html>
