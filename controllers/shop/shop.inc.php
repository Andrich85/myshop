<?php

namespace controllers;
require_once './model/products/product.inc.php';
require_once './repository/dbConnection.inc.php';
require_once './repository/session.inc.php';

class Shop {
 
    private $Model = [];
    private $Db;



    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = new \repository\DbConnection();
        // Record Session Data
        $session = new \repository\Session();
        
    }
    
    public function productGallery($_productCategory)
    {
        if(!isset($_productCategory))
        {
            
        }
        
    }
}
    ?>