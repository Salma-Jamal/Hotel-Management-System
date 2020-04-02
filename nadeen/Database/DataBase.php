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
        $this->dbname="sww";
        $this->conn=new  mysqli($this->serverName, $this->name, $this->pass, $this->dbname);
    }
    public static function getInstance()
    {
        if(self::$single==NULL)
        {
            self::$single=new DataBase();
        }
        return self::$single;
    }

    }
    // get table name and id delete data when ocower any error return False
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
    // get table name and column name and value and id update data when ocower any error return False
    public function Update($tableName,$column,$value,$id)
    {
         $sql = "UPDATE " .$tableName ." SET  ".$column ." = ".$value ." where  id =".$id;


                if ($this->conn->query($sql) === TRUE)
                {

                return TRUE;

                }
                else
                {

                return FALSE;
                }

    }
    public function Select($tableName,$column,$whereCondation,$whereTrue)
    {
        $sql = "SELECT  ";
        for ($index = 0; $index < count($column)-1; $index++) {
           $sql.=$column[$index] . " , " ;
        }
        $sql.=$column[count($column)-1] ." FROM ".$tableName . " WHERE ";
        for ($index = 0; $index < count($whereCondation)-1; $index++) {
           $sql.=$whereCondation[$index] . " = " .$whereTrue[$index] ." AND ";
        }
        $sql.=$whereCondation[count($whereCondation)-1] . " = " .$whereTrue[count($whereCondation)-1];

                $result = $this->conn->query($sql);
                $array = array();

                while ($row=$result->fetch_assoc()) {
	             $array[]=$row;
                }
                return $array;


    }
    


        }

?>
