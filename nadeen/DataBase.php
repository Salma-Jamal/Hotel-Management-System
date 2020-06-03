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

    
    public function Delete($tableName,$id)
    {

        $sql = "DELETE FROM ".$tableName." WHERE id=".$id;

                if ($this->conn->query($sql) === TRUE)
                {
                return TRUE;
                }
                else
                {
                return FALSE;
                }

    }
    
    public function Select()
    {
       $sql="select $id_room,$name_of_gust,$typ_sport from activity";
        $result= $this->conn->query($sql);
        
        if($result-> num_rows >0){
            echo "<table>";
            while($row = $result->fetch_assoc()){
            
            echo "<tr><td>{$row["id-room"]}</td><td>{$row["name-of-gust"]}</td><td>{$row["typ-sport"]}</td></tr>" ;
        }
            echo "</table>";
        }
        else 
        { echo "non";}
        
        $conn->close();
        
        
    }
    
    public function Insertroom($floor,$room,$type)
    {
         
          $sql = "INSERT INTO `Room` (`floorNo`, `roomNo`, `roomTyp`) VALUES ('$floor', '$room', '$type')";
          $result = $this->conn->query($sql);
          header("location: roomdisegn.php");// redirect to home page
                      
    }
    
   public function Insertbill($No_of_day,$type_of_room,$type_of_services)
    {
         
          $sql = "INSERT INTO `Bill` (`first-of-day`, `type-of-room`, `type-of-services`) VALUES ('$No_of_day', '$type_of_room', '$type_of_services')";
          $result = $this->conn->query($sql);
          header("location: billht.php");// redirect to home page
                      
    }
    
    public function Insertac($id_room,$name_of_gust,$typ_sport)
    {
         
          $sql = "INSERT INTO `Activity` (`first-of-day`, `type-of-room`, `type-of-services`) VALUES ('$id_room','$name_of_gust','$typ_sport')";
          $result = $this->conn->query($sql);
          header("location: billht.php");// redirect to home page
                      
    }
    
    
    
    

        }

?>
