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
        // Using the ini_set()
            ini_set("SMTP", "tls://smtp.gmail.com");
            ini_set("sendmail_from", "noreply@myshop.com");
            ini_set("smtp_port", "587");
            ini_set("username", "ricciardi85@gmail.com");
            ini_set("password", "Argacon1");
       
        
    }
    
    public function register($_firstName, $_lastName, $_email, $_password)
    {
        $model = [];
        $_db = $this->Db;
        $verification_code =  $this->createRandomPassword();
                
       $query = "INSERT INTO customer (password,firstname,lastname,email,verificationcode) VALUES ('$_password', '$_firstName', '$_lastName', '$_email','$verification_code')";
        $_db->runQuery($query);

    }
    
    public function createRandomPassword() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

    }
    
    public function sendVerificationEmail($_email, $_password){
        $to      = $_email; // Send email to our user
        $subject = 'Signup | Verification'; // Give the email a subject 
        $headers = "From: noreply@myshop.com";
        $message = '
 
                Thanks for signing up!
                Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

                ------------------------
                Username: '.$_email.'
                Password: '.$_password.'
                ------------------------

                Please click this link to activate your account:
                localhost/myshop/verify.php?email='.$_email.'&hash='.$_password.'

                '; // Our message above including the link
                     

    mail($to, $subject, $message, $headers); // Send our email
    }
}

    ?>