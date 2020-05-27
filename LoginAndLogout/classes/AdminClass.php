<?php
require_once 'person1.php';

class admin extends person1
{
    
    public function showBookings()
    {
        $db= mysqli_connect("localhost" , "root" , "", "hotel");
        $sql= "SELECT * FROM booking";
        $result= mysqli_query($db,$sql);
       echo"<div class='table'>";
       echo "<table>";
         echo"<tr><th>" . 'Name' . "</th><th>" . 'Email'. "</th><th>"
         . 'Phone' . "</th><th>" . 'Country' . "</th><th>" . 'Arrival'
         . "</th><th>" . 'Departure' . "</th><th>". 'TypeRoom' ."</th></tr>";  //$row['index'] t"
         while($row = mysqli_fetch_array($result))
          {   
            echo "<tr><td>" . $row['name'] . "</td><td>"
            . $row['email'] . "</td><td>" . $row['phone']
            . "</td><td>" . $row['country'] . "</td><td>"
            . $row['arrvial'] . "</td><td>" . $row['departure']
            . "</td><td>". $row['typeroom'] ."</td></tr>";  
          }

     echo "</table>";
     echo"</div>";
     mysqli_close($db); 
        
 }
 
 
           public function showComplains()
          {
            $db= mysqli_connect("localhost" , "root" , "", "hotel");
            $sql= "SELECT * FROM complains";
            $result= mysqli_query($db,$sql);
            
            echo"<div class='table1'>";
            echo "<table>";
            echo"<tr><th>" . 'Username' . "</th><th>" . 'Email'. "</th><th>". 'comment' . "</th></tr>";  //$row['index'] t"
            while($row = mysqli_fetch_array($result))
            {   
             echo "<tr><td>" . $row['username'] . "</td><td>". $row['email'] . "</td><td>" . $row['comment']. "</td></tr>";  
            }
            echo "</table>";
            echo"</div>";
           mysqli_close($db); 
    
          }
    
    
    
    
    
}










?>