<?php
include_once 'inh.php';
class Room {
    
    protected  $floorNo;
    protected $roomNo;
    protected $roomTyp;
    
    
    function __construct() {
    $this->floorNo = "";
    $this->roomNo = "";
    $this->roomTyp = "";
    
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
    
         
        
        public function AddRoom()
        {
            
            $Base=DataBase::getInstance();
            $userAttr=$Base->Select("Room",array("floorNo","roomNo","roomTyp"),array("roomNo"),array($this->getroomNo()));
            $this->setfloorNo($userAttr['floorNo']);
            $this->setroomNo($userAttr['roomNo']);
            $this->setroomTyp($userAttr['roomTyp']);
            
            
        }
        
     
        public function updateRoom($numberofroom){
            $Base=DataBase::getInstance();
            if($numberofroom==$this->roomNo)
            {
                $userAttr=$Base->Select("Room",array("floorNo","roomNo","roomTyp"),array("roomNo"),array($this->getroomNo()));
                $this->setfloorNo($userAttr['floorNo']);
                $this->setroomNo($userAttr['roomNo']);
                $this->setroomTyp($userAttr['roomTyp']);
                return true;
                
            }
           return false; 
        }
 
        public function deletRoom($numbrtserach){
            
            $Base=DataBase::getInstance();
            $userAttr=$Base->Select("Room",array("roomNo"),array("roomNo"),array($numbrtserach));
            if($numbrtserach==true)
            {
              $userAttr=$Base->Delete("Room",array($this->numbrtserach));
                return true;
            }
            
            return false;
            
        }
        
         
}



?>