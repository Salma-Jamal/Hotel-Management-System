<?php
session_start();
require_once 'activity.php';

if(isset($_POST['submit_Class'])){

$id_room=$_POST['name'];
$name_gust=$_POST['floor']; 
$Type_sport =$_POST['bulid_name'];

$activ = new Activity();

$activ->setid_room($id_room);
$activ->setname_of_gust($name_gust);
$activ->settyp_sport($Type_sport );

$activ->choose_activity($id_room,$name_gust,$Type_sport);
       
}

if(isset($_POST['show_Class'])){

$name_gust=$_POST['floor']; 

$activ = new Activity();
$activ->setname_of_gust($name_gust);

$activ->choose_activity($id_room,$name_gust,$Type_sport);
    
$result [] =$activ->show_names($name_gust);    
}


?>

<html>
<head>
  <link rel="stylesheet" href="Add_Room.css">
    
    <script>

function checkAdult(result) {
  return result[];
}

function myFunction() {
  document.getElementById("demo").innerHTML = ages.every(checkAdult);
}
</script>

    
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
        <input type="text" name="name" class="Class_Input" placeholder="Enter Room name" required pattern="^[a-zA-Z]*" title="you should enter valid class name">

	  </div>
      <br><br>
      <div class="Floor">
      <label>Name of gust </label>
      <input type="text"  name="floor" class="Class_Input"  placeholder="Enter Floor" required pattern="(1|2|3|4)" title="you should enter valid floor">
       </div>
       <br>
       <div class="Bulid_Name">
         <label> Type of sport   </label>
           
           <select name="bulid_name" class="Class_Input" >
              <option value="swimming">swimming</option>
              <option value="tennis">tennis</option>
              <option value="massage">massage</option>
           </select>
       </div>

       <br>
       <div class="submit">
         <div class="Add">  <input type="submit" name="submit_Class"  value="Add" > </div>
         <div class="cancel"> <input type="reset" value="Cancel" > </div>
           <div class="cancel2"> <input type="button" value="Show" > </div>
      </div>
    </div>

  </form>

  </div>
 </body>
 </html>
