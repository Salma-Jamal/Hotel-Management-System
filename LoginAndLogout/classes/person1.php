<?php
require_once 'AdminClass.php';
require_once 'userClass.php';
require_once 'recepClass.php';
include_once('../Room/DataBase.php');

// Factory Pattern
interface Redirect
{
    public function redirectLogin($usr);
}


class person1
{
    
    public $uName;
    public $Pass;
    public $Email;
    public $Phone;
 
  public function set_uname($name)
  {
    $this->uName = $name;
  }
  
  public function get_uname()
  {
    return $this->uName;
  }
  
 public function set_pass($pass)
 {
    $this->Pass = $pass;
  }
  
  public function get_pass()
  {
    return $this->Pass;
  }
  
  
  public function set_email($mail)
  {
    $this->Email = $mail;
  }
  
  public function get_email()
  {
    return $this->Email;
  }
  
  
  public function set_phone($phon)
  {
    $this->Phone = $phon;
  }
  
  public function get_phone()
  {
    return $this->Phone;
  }
 
 
public function Login($usr,$pass) {
     	$Base=DataBase::getInstance();
      $result = $Base->logIn($usr,$pass);
     
     if(mysqli_num_rows($result) == 1)
      {
        if($usr == 'admin')
          {
               $adm =admin::getInstance();
               $adm->redirectLogin($usr);
          }
                      
        elseif($usr == 'recep')
           {
               $rcp =recep::getInstance();
               $rcp->redirectLogin($usr);  
           }
      
        else
          {

             $ur = new user();
             $ur->redirectLogin($usr);
          }
      }
        
     else
      {
        $_SESSION['message'] = "Username / Password incorrect"; 
      }
 }
  
  
  
      public function Logout()
      {
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['message']= "You are now logged out";
        header("location: home.php");
       
      }
     
  
}







?>
