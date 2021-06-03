<?php
require_once 'DataBase.php';

class Room extends DataBase{
    
    public  $floorNo;
    public $roomNo;
    public $roomTyp;
    
    function __construct() {
    $this->floorNo = "";
    $this->roomNo = "";
    $this->roomTyp = "";
    }
 
 function getfloorNo() {
return $this->floorNo;
}

function getroomNo() {
return $this->roomNo;
}

function getroomTyp() {
return $this->roomTyp;
}
 
function setfloorNo($floorNo) {
$this->floorNo = $floorNo;
}

function setroomNo($roomNo) {
$this->roomNo = $roomNo;
}

function setroomTyp($roomTyp) {
$this->roomTyp = $roomTyp;
}
    
         
public function AddRoom($floor,$room,$type)
        {
            
            $Base=DataBase::getInstance();
            $Base->Insertroom($floor,$room,$type);
                                
            
        }
        
     
        public function updateRoom($oldnumber,$floor,$No,$type)
        {
            $Base=DataBase::getInstance();
            $Base->updateRoom($oldnumber,$floor,$No,$type);
                   
        }
 
        public function deletRoom($numbrtserach)
        {
            
            $Base=DataBase::getInstance();
          //  if($numbrtserach==roomNo)
            //{
              $Base->Delete("Room",$numbrtserach);
            //}
            
        }
        
         
}



?>