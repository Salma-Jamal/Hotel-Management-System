<?php
require_once 'DataBase.php';

class Activity extends DataBase{

public $id_room;
public $name_of_gust;
public $typ_sport;

    
function __construct() 
{
    $this->id_room = "";
    $this->name_of_gust = "";
    $this->typ_sport = "";
}

function getid_room() {
return $this->id_room;
}

function getname_of_gust() {
return $this->name_of_gust;
}

function gettyp_sport() {
return $this->typ_sport;
}
 
function setid_room($id_room) {
$this->id_room = $id_room;
}

function setname_of_gust($name_of_gust) {
$this->name_of_gust = $name_of_gust;
}

function settyp_sport($typ_sport) {
$this->typ_sport = $typ_sport;
}

public function choose_activity($id_room,$name_of_gust,$typ_sport){

            $Base=DataBase::getInstance();
 
            $Base->Insertac($id_room,$name_of_gust,$typ_sport);
            
    
   

}
    
public function show_names($name){
    
    $Base=DataBase::getInstance();
    $Base->Select($name);
    
}

}
   
   









?>