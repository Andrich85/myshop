<?php

namespace repository;
use mysqli;

class DbConnection
{
  
    private $mysqli;
    private $Host = "localhost";
    private $Db = "myshop";
    private $User="root";
    private $Password="";
    private $Port = 3306;
    
        
    public function __construct ()
    {
      
        $this-> mysqli = new mysqli($this->Host, $this->User, $this->Password, $this->Db, $this->Port);
        return $this->mysqli;
        
    }
    
    public function getTable ($query) {
    
        if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
        $result = $this->mysqli ->query($query);
        /* associative array */
        mysqli_fetch_all($result, MYSQLI_ASSOC);
       // Free result set
        return $result;

       
    }
    
    function runQuery($query) {
        if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
        $stmt = $this-> mysqli->prepare($query);
        
        $stmt->execute();
       
    }
 
}

?>

