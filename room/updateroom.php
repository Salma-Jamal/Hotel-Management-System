
<?php
session_start();
require_once 'Room.php';

if(isset($_POST['submit_Class'])){

$oldroomnumber=$_POST['old'];
$roomtype=$_POST['bulid_name'];
$roomnum=$_POST['name']; 
$floorNo=$_POST['floor'];

$room = new Room();

$room->setfloorNo($floorNo);
$room->setroomNo($roomnum);
$room->setroomTyp($roomtype);

$room->updateRoom($oldroomnumber,$room->floorNo,$room->roomNo,$room->roomTyp);

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
      For updating Room
      </span>
    <form class="foorm" action="updateroom.php" method="POST">
    <div class="form">
      <div class="Class_name">
        <label>Old Room Number  </label>
        <input type="text" name="old" class="Class_Input"  value = "" placeholder="Enter Room number"  title="you should enter valid class name">
	   </div>
        
        <br>
        
      <div class="Class_name1">
        <label>New Room Number  </label>
        <input type="text" name="name" class="Class_Input"  value = "" placeholder="Enter Room name" title="you should enter valid class name">
	  </div>
        
      <br>
        
      <div class="Floor">
      <label>New Floor Number </label>
      <input type="text"  name="floor" class="Class_Input" value = "" placeholder="Enter Floor" required pattern="(1|2|3|4)" title="you should enter valid floor">
       </div>
        
       <br>
        
       <div class="Bulid_Name">
         <label>New Room Type     </label>
         <input type="text" name="bulid_name" class="Class_Input" value = ""  placeholder="room single/ double.." required pattern="^[a-zA-Z]*" title="you should enter valid build name">
       </div>

       <br>
       <div class="submit">
         <div class="Add"><input type="submit" name="submit_Class"  value="Update" ></div>
         <div class="cancel">
           <input type="reset" value="Cancel" >
         </div>
      </div>
    </div>

  </form>

  </div>
 </body>
 </html>
