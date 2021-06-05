<?php

include_once('../Room/DataBase.php');
include_once('classes/AdminClass.php');


//Adapter pattern
 interface show_ser_book
 {
  
   public function showBookings();
	  public function showServices();
			
}

 interface show_all
 {
   public function show($type);
		
 }
 
 

class show_book implements show_ser_book

{
   
   public function showServices()
   {
      // Do Nothing
   }
   
   public function showBookings()
    {
							$Base=DataBase::getInstance();
       $result = $Base->showBooking();
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
    }
   
   
}

class show_serv implements show_ser_book
{
   
    public function showBookings()
    {
      // Do Nothing 
    }
    
    
    public function showServices()
     {
			     $Base=DataBase::getInstance();
        $result = $Base->showServices();
        echo"<div class='table1'>";
        echo "<table>";
        echo"<tr><th>" . 'Service name' . "</th><th>". 'comment' . "</th></tr>";  
        while($row = mysqli_fetch_array($result))
          {   
             echo "<tr><td>" . $row['username'] . "</td><td>" . $row['comment']. "</td></tr>";  
           }
        echo "</table>";
        echo"</div>";
       
    }
   
}

class adapter implements show_all
{
     public $show_s_b;
     
     public function __construct($type)
    {
      if ($type == 'book')
       {
         $this->$show_s_b = new show_book();
       }
      elseif ($type == 'ser')
      {
         $this->$show_s_b = new show_serv();
      }

   }
   
   public function show($type)
   {
      if ($type == 'book')
      {
         $this->$show_s_b->showBookings();
      }
      elseif($type == 'ser')
      {
         $this->$show_s_b->showServices();
      }
   }
     
 }

   class show_all_wrap implements show_all{
      
      public $adpt;
      public $adm;
      
      public function show($type)
      {
         if($type == 'comp')
         {
		         $this->$adm = new admin();
           $this->$adm->showComplains();
         }
         
         elseif ($type == 'ser' or $type == 'book')
         {
            $this->$adpt = new adapter($type);
            $this->$adpt->show($type);
         }
      }
   
   }






?>