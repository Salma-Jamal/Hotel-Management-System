<?php
session_start();
require_once 'classes/person1.php';
require_once 'classes/userClass.php';


if (isset($_POST['sub_btn']))
{
    
      $srname =$_POST['username'];
      $comment=$_POST['comment'];
      $r = new user();
      $r->services($srname , $comment);
 
}



?>


<!DOCTYPE html>
<html>
  <head>
    <title>Rate Service</title>
    <link rel="stylesheet" type="text/css" href="css/ser.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>   
       
  <body>
 
<?php
   if(isset($_SESSION['message']))
     {
       echo "<div id='error_msg'>".$_SESSION['message']."</div>";
       unset($_SESSION['message']);
     }
?>
        
       <form class ="rr" method="post" action="services.php">
           <table>
             <tr>
                <td>Service Name</td>
                <td><input type="text" name="username" class="textInput"  placeholder=" ex. pool,..."></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <textarea name ="comment" cols="50" rows="10" class='ta' placeholder=" Good, Bad, ...."></textarea>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sub_btn" value="Submit" class="btn" ></td>
            </tr>
            
           </table> 
            
       </form>
        

        
        
        
        
        
        
        
  </body> 
        
</html>