<?php

require_once 'person1.php';
include_once('../Room/DataBase.php');


class admin extends person1 implements Redirect
{
 
 
    public function redirectLogin($usr)
    {
      header("location: admin.php");
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['username']= $usr;
    }
    
  
//   public function showBookings()
//    {
//       // $db= mysqli_connect("localhost" , "root" , "", "hotel");
//       // $sql= "SELECT * FROM booking";
//       //$result= mysqli_query($db,$sql);
//							$Base=DataBase::getInstance();
//       $result = $Base->showBooking();
//							
//       echo"<div class='table'>";
//       echo "<table>";
//         echo"<tr><th>" . 'Name' . "</th><th>" . 'Email'. "</th><th>"
//        . 'Phone' . "</th><th>" . 'Country' . "</th><th>" . 'Arrival'
//         . "</th><th>" . 'Departure' . "</th><th>". 'TypeRoom' ."</th></tr>";  //$row['index'] t"
//         while($row = mysqli_fetch_array($result))
//         {   
//            echo "<tr><td>" . $row['name'] . "</td><td>"
//            . $row['email'] . "</td><td>" . $row['phone']
//          . "</td><td>" . $row['country'] . "</td><td>"
//            . $row['arrvial'] . "</td><td>" . $row['departure']
//            . "</td><td>". $row['typeroom'] ."</td></tr>";  
//          }
// 
//     echo "</table>";
//     echo"</div>";
//     //mysqli_close($db); 
//     
//}
 
 
         public function showComplains()
        {
											$Base=DataBase::getInstance();
           $result = $Base->showComplains();
           echo"<div class='table1'>";
           echo "<table>";
           echo"<tr><th>" . 'Username' . "</th><th>" . 'Email'. "</th><th>". 'comment' . "</th></tr>";  
           while($row = mysqli_fetch_array($result))
           {   
             echo "<tr><td>" . $row['username'] . "</td><td>". $row['email'] . "</td><td>" . $row['comment']. "</td></tr>";  
           }
           echo "</table>";
           echo"</div>";

       }
          
          
                  
//           public function showServices()
//          {
//												$Base=DataBase::getInstance();
//           $result = $Base->showServices();
//            //$db= mysqli_connect("localhost" , "root" , "", "hotel");
//            //$sql= "SELECT * FROM service";
//            //$result= mysqli_query($db,$sql);
//            
//            echo"<div class='table1'>";
//            echo "<table>";
//            echo"<tr><th>" . 'Username' . "</th><th>". 'comment' . "</th></tr>";  
//            while($row = mysqli_fetch_array($result))
//            {   
//             echo "<tr><td>" . $row['username'] . "</td><td>" . $row['comment']. "</td></tr>";  
//            }
//            echo "</table>";
//            echo"</div>";
//           //mysqli_close($db); 
//          
//          }
    
     
}







?>