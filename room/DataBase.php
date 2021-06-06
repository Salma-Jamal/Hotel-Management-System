<?php
class DataBase
{
    private static $single;
    private $serverName;
    private $name;
    private $pass;
    private $dbname;
    private $conn;
    
    private function __construct()
    {
        $this->serverName="localhost";
        $this->name="root";
        $this->pass="";
        $this->dbname="hotel";
        $this->conn= mysqli_connect($this->serverName, $this->name, $this->pass, $this->dbname);
    }
    
    public static function getInstance()
    {
        if(self::$single==NULL)
        {
            self::$single=new DataBase();
        }
        return self::$single;
    }

    public function logIn($usr,$pass)
    {
      $sql= "SELECT * FROM persons WHERE username='$usr' AND password='$pass' ";
      $result = $this->conn->query($sql);
      return  $result;
    }
    
    public function Delete($tableName,$id)
    {

        $sql = "DELETE FROM `$tableName` WHERE roomNo='$id'";

                if ($this->conn->query($sql) == TRUE)
                {
                return TRUE;
                }
                else
                {
                return FALSE;
                }

    }
    
    
         public function updateRoom($oldNo,$floor,$room,$type)
    {
         
          $sql = "UPDATE `Room` SET floorNo='$floor', roomNo='$room', roomTyp='$type' WHERE roomNo='$oldNo'";
          $result = $this->conn->query($sql);
          header("location: updateroom.php"); 
                      
    }
    
    
    public function Insertroom($floor,$room,$type)
    {
         
          $sql = "INSERT INTO `Room` (`floorNo`, `roomNo`, `roomTyp`) VALUES ('$floor', '$room', '$type')";
          $result = $this->conn->query($sql);
          header("location: roomdisegn.php");
                      
    }
    
    
    public function Select($name)
    {
       $sql= "select * from Activity where guestName='$name'";
       
        $result= $this->conn->query($sql);
            echo "<table>";
            echo"<tr><th>" . 'Room num' . "</th><th>" . 'GuestName'. "</th><th>". 'Activity' . "</th></tr>"; 
            while($row = mysqli_fetch_array($result))
            {   
             echo "<tr><td>" . $row['roomNo'] . "</td><td>". $row['guestName'] . "</td><td>" . $row['activityType']. "</td></tr>";  
            }
            echo "</table>";
          
          
        
    }
    

    
   public function Insertbill($No_of_day,$type_of_room,$type_of_services)
    {
         
          $sql = "INSERT INTO `Bill` (`firstOfDay`, `typeOfRoom`, `typeOfServices`) VALUES ('$No_of_day', '$type_of_room', '$type_of_services')";
          $result = $this->conn->query($sql);
         
                      
    }
    
    public function Insertac($id_room,$name_of_gust,$typ_sport)
    {
         
          $sql = "INSERT INTO `Activity` (`roomNo`, `guestName`, `activityType`) VALUES ('$id_room','$name_of_gust','$typ_sport')";
          $result = $this->conn->query($sql);
    
                      
    }
    
   public function showBooking()
    {
         
          $sql= "SELECT * FROM booking";
          $result = $this->conn->query($sql);
          return  $result;
         
                      
    }
    
       public function showComplains()
    {
         
           $sql= "SELECT * FROM comp";
          $result = $this->conn->query($sql);
          return  $result;
         
                      
    }
    
    public function showServices()
    {
      $sql= "SELECT * FROM service";
      $result = $this->conn->query($sql);
      return  $result;
    }
    
    public function reg($usr,$pass,$email,$phone){
      $sql = "INSERT INTO `persons` (`id`, `username`, `password`, `email`, `phone`) VALUES ('', '$usr', '$pass', '$email', '$phone')";
      $result = $this->conn->query($sql);
      return $result;
    }
    
     public function rate($roomNo,$floor,$roomType,$rate){
      $sql = "INSERT INTO `ratings` (`roomNo`, `floor`, `roomType`, `rate`) VALUES ('$roomNo', '$floor', '$roomType', '$rate')";
      $result = $this->conn->query($sql);
      return $result;
    }
    
    
   public function servi($srname , $comment){
      $sql = "INSERT INTO `service`(`username`, `comment`) VALUES ('$srname','$comment')";
      $result = $this->conn->query($sql);
      return $result;
    }
    
   public function complain($c_name ,$email, $comment){
      $sql = "INSERT INTO `comp` (`username`, `email`, `comment`) VALUES ('$c_name','$email','$comment')";
      $result = $this->conn->query($sql);
      return $result;
    }
    
    
    
    

        }

?>
