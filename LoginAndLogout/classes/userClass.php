<?php
require_once 'classes/person1.php';
include_once('../Room/DataBase.php');


class user extends person1 implements Redirect
{
    
    
   public function redirectLogin($usr)
    {
      header("location: user.php");
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['username']= $usr;
    }
    
    
    public function Register($usr,$pass,$email,$phone)
    {

      $Base=DataBase::getInstance();
      $result = $Base->reg($usr,$pass,$email,$phone);
      if($result == 1){
         $_SESSION['message'] = "Registered Successfully!";
         header("location: home.php");       
     
      }

    }
    
    public function Rate($roomNo,$floor,$roomType,$rate)
    {
     
      $Base=DataBase::getInstance();
      $result = $Base->rate($roomNo,$floor,$roomType,$rate);
      if($result == 1){
         $_SESSION['message'] = "Rated Successfully!";
         header("location: user.php");      
   
      }
    }
       
       public function services($srname , $comment)
         {
     
           $Base=DataBase::getInstance();
           $result = $Base->servi($srname , $comment);
           if($result == 1){
              $_SESSION['message'] = "Successfully got your message!";
              header("location: user.php");
              }
       }
       
        public function Complain($c_name ,$email, $comment)
         {
     
           $Base=DataBase::getInstance();
           $result = $Base->complain($c_name ,$email, $comment);
           if($result == 1){
              $_SESSION['message'] = "Successfully got your message!";
              header("location: user.php");
              }
       }
       
       

    
}
















?>