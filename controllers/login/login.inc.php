<?php

namespace controllers;

//require_once './repository/session.inc.php';
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php





class Login {
   
           
    private $Db;
    public $Authorization;

    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = new \repository\DbConnection();
        $pdo= $this->Db->createPDO();
       
       
    }
    
    public function isLoggedIn()
    {
        return $GLOBALS["Authorization"] ->isLoggedIn();
        
    }
    
    public function getUserName(){
        
        return $GLOBALS["Authorization"] ->getUsername();
             
    }
    
    public function login($_userName, $_password)
    {
      
        try {
                    $GLOBALS["Authorization"]->loginWithUsername($_userName, $_password);
                    echo 'User is logged in';
                }
                catch (\Delight\Auth\InvalidEmailException $e) {
                   echo 'Wrong email address';
                }
                catch (\Delight\Auth\InvalidPasswordException $e) {
                    echo 'Wrong password';
                }
                catch (\Delight\Auth\EmailNotVerifiedException $e) {
                   echo 'email not verified';
                }
                catch (\Delight\Auth\TooManyRequestsException $e) {
                    die('Too many requests');
                }
        
    }
    
}
    

    ?>