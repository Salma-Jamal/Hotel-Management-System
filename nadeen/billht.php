<?php
session_start();
require_once 'bill.php';

if(isset($_POST['submit_Class'])){

$No_of_day=$_POST['name'];
$type_of_room=$_POST['floor']; 
$type_of_servies=$_POST['bulid_name'];

$ob_bill = new bill();

$ob_bill->setNo_of_day($No_of_day);
$ob_bill->settype_of_room($type_of_room);
$ob_bill->settype_of_servies($type_of_servies);

$result=$ob_bill->cal_price($ob_bill->No_of_day , $ob_bill->type_of_room , $ob_bill->type_of_servies);
    
}


?>

<html>
<head>
  <link rel="stylesheet" href="billdesgin.css">
  </head>
<body>
  <div class="contain">
    <div class="Add">
      <span>
      Calculating Bill
      </span>
    <form class="foorm" action="billht.php" method="POST">
    <div class="form">
      <div class="Class_name">
        <label> First Of Day  </label>
        <input type="text" name="name" class="Class_Input" placeholder="number of day.." required pattern="^[a-zA-Z]*" title="you should enter valid class name">

	  </div>
      <br><br>
      <div class="Floor">
      <label>Type OF Room </label>
      <input type="text"  name="floor" class="Class_Input"  placeholder="single/double.." required pattern="(1|2|3|4)" title="you should enter valid floor">
       </div>
       <br>
       <div class="Bulid_Name">
         <label>Type Of Service </label>
         <input type="text" name="bulid_name" class="Class_Input"  placeholder="part/full..." required pattern="^[a-zA-Z]*" title="you should enter valid build name">
       </div>

       <br>
       <div class="submit">
         <div class="Add"><input type="submit" name="submit_Class"  value="cal" ></div>
         <div class="cancel">
           <input type="reset" value="Cancel" >
         </div>
           <br>
           <div class="Bulid_Name2">
         <label>Raselt </label>
         <input type="text" name="bulid_name" value="$result" class="Class_Input"  placeholder="" required pattern="^[a-zA-Z]*" title="you should enter valid build name">
       </div>
           
      </div>
    </div>

  </form>

  </div>
 </body>
 </html>
