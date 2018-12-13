<?php

namespace controllers;





class Register {
   
           
    private $Db;
    private $Verification_code;
    private $Authorization;
    public function __construct() {
                    $this->Db = new \repository\DbConnection();

                    $this->Verification_code =   $this->createRandomPassword();
                    $this -> Authorization =  $GLOBALS["Authorization"];
                  
    }
    
//    public function register($_firstName, $_lastName, $_email, $_password)
//    {
//        $model = [];
//        $_db = $this->Db;
//        
//      
//       $code =  $this->Verification_code;
//       $query = "INSERT INTO customer (password,firstname,lastname,email,verificationcode,registrationdate) VALUES ('$_password', '$_firstName', '$_lastName', '$_email','$code', CURDATE())";
//        $_db->runQuery($query);
//
//    }
    
    public function register($_username, $_email, $_password)
    {
        
        
             try {
                $userId = $this-> Authorization -> register($_email, $_password, $_username);
                //});

                echo 'Thank you for your registration. Please check your email to complete the verification process.';
            }
            catch (\Delight\Auth\InvalidEmailException $e) {
                
                return "Invalid email.";
            }
            catch (\Delight\Auth\InvalidPasswordException $e) {
                
                return "Invalid password.";
            }
            catch (\Delight\Auth\UserAlreadyExistsException $e) {
                
                return "<p>User already exists.</p>";
                
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
               
                echo('Too many requests');
            }
}
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
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
        $_ENV['SENDGRID_API_KEY'] = ""; //
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
                <p>Please click <a href="localhost/myshop/verify.php?verify=1&email='.$_email.'&verificationcode='.$_verificationcode.'"> here <a/> to activate your account:</p>
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
    
    public function verifyEmail($_email,$_verificationcode)
    {
        $_db = $this->Db;
        
       $table= $_db->getTable("SELECT COUNT(email) FROM customer WHERE email = '$_email' AND verificationcode = '$_verificationcode'");
       if ($table -> field_count == 0) 
                {
                        echo "Email not verified";
                       
                }   
       else
            {
                echo "Email verified correctly. Now you can login.";
                 $query = "UPDATE customer SET emailverified = 1 WHERE email = '$_email'";
                $_db->runQuery($query);
            }
       
    }
      
      
        
    }


    ?>