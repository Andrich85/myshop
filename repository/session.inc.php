<?php

namespace repository;
    

class Session{
    
    private $_db;
    public $UserIsAuthenticated;

    public function __construct() {
//        $this->_db = new \repository\DbConnection();
//        $cookie = $_COOKIE["PHPSESSID"];
//
//        $query = "CALL storeCookie('" . $cookie . "');";
//        $this ->_db->runQuery($query);
        
    }
    
    static function authenticateUser()
    {
        $UserIsAuthenticated = true;
    }
    
}

