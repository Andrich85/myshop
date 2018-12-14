<?php
require_once ('./controllers/login/login.inc.php');
if(isset($_SESSION["Authorization"])){
    //$_loginInformationsController = $_SESSION["Authorization"];
}
$isLoggedIn = $_loginController->isLoggedIn();
$userName = $_loginController->getUserName();

?>
<?php if ($isLoggedIn == true) { ?>
 <p class="m-r-5"><?= $userName ?></p><img src="images/icons/icon-header-01.png" class="header-icon1 header-icon1 js-show-login-dropdown" alt="ICON">
                                    <div class="header-cart login-dropdown">
                                     
                                    
                                            <ul class="header-cart-wrapitem">
                                                                            
                                                                                
                                                                                         
                                                                                        <li header-cart-item><a href="home-03.html">My Profile</a></li>
                                                                                        <li header-cart-item><a href="home-03.html">My Orders</a></li>
                                                                                        <li header-cart-item><a href="home-03.html">Help and Contacts</a></li>
                                                                                        <hr>
                                                                                        <button class="btn btn-info" onclick="logOut()">Logout</button>
                                                                                            </ul>
                                        
                                        </nav> 
                                    </div>
<?php } 
else {
?>
<img src="images/icons/icon-header-01.png" class="header-icon1 header-icon1 js-show-login-dropdown" alt="ICON">
                                    <div class="header-cart login-dropdown">
                                     
                                    
                                            <ul class="header-cart-wrapitem">
                                                                                        <li class="header-cart-item centered">
                                                                                        <a href="login.php">
                                                                                            <button class="btn btn-info">Login</button>
                                                                                            <li header-cart-item>
                                                                                            <a href="register.php">
                                                                                                <span class="small">New user? Please register.</span>
                                                                                            </a>
                                                                                            </li>
                                                                                        </a>
                                                                                        </li>
                                                                                    
                                                                                                                                                          
                                                                            
                                                                            
                                            </ul>
                                        
                                        </nav> 
                                    </div>
<?php
    }
    ?>