<?php

namespace controllers;
require_once './model/login/customer.inc.php';
require_once './repository/dbConnection.inc.php';
require_once './repository/session.inc.php';
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php


require './vendor/autoload.php';


class Register {
   
           
    private $Db;
    private $Verification_code;
    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = new \repository\DbConnection();
       
        // Using the ini_set()
        // ini_set("SMTP", "tls://smtp.gmail.com");
        // ini_set("sendmail_from", "noreply@myshop.com");
        // ini_set("smtp_port", "587");
        // ini_set("username", "ricciardi85@gmail.com");
        // ini_set("password", "Argacon1");
       
        
    }
    
    public function register($_firstName, $_lastName, $_email, $_password)
    {
        $model = [];
        $_db = $this->Db;
        
       $this->Verification_code =   $this->createRandomPassword();
       $query = "INSERT INTO customer (password,firstname,lastname,email,verificationcode) VALUES ('$_password', '$_firstName', '$_lastName', '$_email','$verification_code')";
        $_db->runQuery($query);

    }
    
    public function getVerificationCode()
    {
        return $this ->Verification_code;
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
    
    public function sendVerificationEmail($_email, $_password, $_verificationcode){
        $_ENV['SENDGRID_API_KEY'] = "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";
        $options = $_ENV['SENDGRID_API_KEY'];
      $sendgrid = new \SendGrid($options);
        
        $message = '
 
                <h3>Thanks for signing up!</h3>
                <div>
                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                </div>
                <br>
                <p>------------------------</p>
                <p>Username: '.$_email.'</p>
                <p>Password: '.$_password.'</p>
                <p>------------------------</p>
                <p>Please click <a href="localhost/myshop/verify.php?email='.$_email.'&verificationcode='.$_verificationcode.'"> here <a/> to activate your account:</p>
                <br>
          '; 
            // Our message above including the link
            // $to      = $_email; // Send email to our user
            
            // $headers = "From: noreply@myshop.com";
            // $mail($to, $subject, $message, $headers); // Send our email

        $email    = new \SendGrid\Mail\Mail();
        $email->  addTo($_email);
        $subject = 'MyShop | Signup | Verification'; // Give the email a subject 
         $email -> setFrom("noreply@yourdomain.com");
         $email ->setSubject($subject);
         $email -> addContent("text/html", $message);

        $sendgrid->send($email);
    }
    
    public function verifyEmail()
    {
        
        
    }
}

    ?>