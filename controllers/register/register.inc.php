<?php

namespace controllers;
require_once './model/login/customer.inc.php';
require_once './repository/dbConnection.inc.php';
require_once './repository/session.inc.php';

class Register {
 
    private $Db;
    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = new \repository\DbConnection();
       
        
    }
    
    public function register($_firstName, $_lastName, $_email, $_password)
    {
        $model = [];
        $_db = $this->Db;
       $query = "INSERT INTO customer (password,firstname,lastname,email) VALUES ('$_password', '$_firstName', '$_lastName', '$_email')";
        $_db->runQuery($query);
       
//       return  $this->Model;
    }
}
?>