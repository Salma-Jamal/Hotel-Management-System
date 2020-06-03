<?php
require_once 'DataBase.php';

class bill extends DataBase{


    public $No_of_day;
    public $type_of_room;
    public $type_of_servies;


 function __construct() {
    $this->No_of_day = "";
    $this->type_of_room = "";
    $this->type_of_servies = "";
    }
    
    
    function getNo_of_day() {
return $this->No_of_day;
}

function gettype_of_room() {
return $this->type_of_room;
}

function gettype_of_servies() {
return $this->type_of_servies;
}
 
function setNo_of_day($No_of_day) {
$this->No_of_day = $No_of_day;
}

function settype_of_room($type_of_room) {
$this->type_of_room = $type_of_room;
}

function settype_of_servies($type_of_servies) {
$this->type_of_servies = $type_of_servies;
}
   
   
   public function cal_price($No_of_day,$type_of_room,$type_of_servies)
        {
           $Base=DataBase::getInstance();
           $Base->Insertbill($No_of_day,$type_of_room,$type_of_servies);
           $cal = 0;
                        
        if($type_of_room=='single' && $type_of_servies == 'part')
       {
           $cal= $No_of_day*2000;
           
       }
       
       elseif($type_of_room=='double' && $type_of_servies == 'part')
       {
         $cal=$No_of_day*3000;
             
       }
       
      elseif($type_of_room=='single' && $type_of_servies == 'full')
       {
         $cal=$No_of_day*5000;
             
       }
       
      elseif($type_of_room=='double' && $type_of_servies == 'full')
       {
         $cal=$No_of_day*10000;
             
       }
          return $cal;
        }

}
?>