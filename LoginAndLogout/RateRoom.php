<?php
session_start();
require_once 'classes/userClass.php';

if (isset($_POST['rate_btn']))
{

   $roomno  = $_POST['roomnum'];
   $rfloor = $_POST['Make'];
   $roomT = $_POST['roomtype'];
   $ratee = $_POST['chB']; 
   $User = new user();
   $User->Rate($roomno ,$rfloor,$roomT,$ratee);
    
   }

?>

<!DOCTYPE html>
<html>
    <head>
       <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
       <title>Five Star Hotel</title>
       <link rel="stylesheet" type="text/css" href="css/rateRoomStyle.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
     
   
     </style>
    </head>   
       
    <body>
        
        <?php
   if(isset($_SESSION['message']))
     {
       echo "<div id='error_msg'>".$_SESSION['message']."</div>";
       unset($_SESSION['message']);
     }
?>
        <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <button  class="homebtn" onclick="goBack();"><i class="fa fa-home"></i></button>
         
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
 
              <div class="rateRoom">Rate Your Room</div>
              
              
              <form class ="rateform" method="post" action="RateRoom.php">
                <table class="vv" >
                 
                 <tr class="tt">
                    <td class="r">
                        Room Number
                    </td>
                     <td>
                        <input type="text" name="roomnum" class="textInput"  placeholder="Room Number">
                    </td>
                 </tr>
                 
                <tr class="tt">    
                <td class="r">Floor </td>
                <td>
                <select class="select" name="Make">
                 <option value="0">Select Floor</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="3">4</option>
                </select>
               
                </td>
                 </tr>
                
                 <tr class="tt">
                    <td class="r">
                        Room Type 
                    </td>
                     <td>
                        <input type="text" name="roomtype" class="textInput"  placeholder="Room Type">
                    </td>
                 </tr>
                 
                 <tr class="tt">
                    <td class="r">Rate</td>
                    <td>
                        <label class="container">1
                          <input value="1" type="radio"  name="chB" checked="checked" >
                          <span class="checkmark"></span>
                        </label>
                        
                        <label class="container">2
                          <input value="2" type="radio" name="chB">
                          <span class="checkmark"></span>
                        </label>
                                                
                        <label class="container">3
                          <input value="3" type="radio" name="chB" >
                          <span class="checkmark"></span>
                        </label>
                                                                        
                        <label class="container">4
                          <input value="4" type="radio" name="chB">
                          <span class="checkmark"></span>
                        </label>
                                                                                                
                        <label class="container">5
                          <input value="5" type="radio" name="chB">
                          <span class="checkmark"></span>
                        </label>

                      
                    </td>  
                 </tr>
                 
                  <tr>
            
                <td>
              
                    <td><input type="submit" name="rate_btn" value="Rate" class="rate_btn1" ></td>
                </td>
            </tr>
                 
                 
                 
            </table>
          </form>
     
        
     
        
  
        
    </body> 
        
        
        
        
        
        
</html>