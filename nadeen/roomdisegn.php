<?php
session_start();
require_once 'Room.php';

if(isset($_POST['submit_Class'])){

$roomtype=$_POST['bulid_name'];
$roomnum=$_POST['name']; 
$floorNo=$_POST['floor'];

$room = new Room();

$room->setfloorNo($floorNo);
$room->setroomNo($roomnum);
$room->setroomTyp($roomtype);
$room->AddRoom($room->floorNo,$room->roomNo,$room->roomTyp);
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
      For Adding Room
      </span>
    <form class="foorm" action="roomdisegn.php" method="POST">
    <div class="form">
      <div class="Class_name">
        <label>Room Number  </label>
        <input type="text" name="name" class="Class_Input" placeholder="Enter Room number">

	  </div>
      <br><br>
      <div class="Floor">
      <label>Floor Number </label>
      <input type="text"  name="floor" class="Class_Input"  placeholder="Enter Floor" required pattern="(1|2|3|4)" title="you should enter valid floor">
       </div>
       <br>
       <div class="Bulid_Name">
         <label> Room Type     </label>
         <input type="text" name="bulid_name" class="Class_Input"  placeholder="room single/ double.." required pattern="^[a-zA-Z]*" title="you should enter valid build name">
       </div>

       <br>
       <div class="submit">
         <div class="Add"><input type="submit" name="submit_Class"  value="Add" ></div>
         <div class="cancel">
           <input type="reset" value="Cancel" >
         </div>
      </div>
    </div>

  </form>

  </div>
 </body>
 </html>
