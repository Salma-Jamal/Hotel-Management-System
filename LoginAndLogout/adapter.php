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
 
 
class adapter implements show_all
{
     public $show_s_b;
     
     public function __construct($type)
    {
      if ($type == 'book' or $type == 'ser')
       {
         $this->$show_s_b= new recep();
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
           $this->$adm->show($type);
         }
         
         elseif ($type == 'ser' or $type == 'book')
         {
            $this->$adpt = new adapter($type);
            $this->$adpt->show($type);
         }
      }
   
   }






?>