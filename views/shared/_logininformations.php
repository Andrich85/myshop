<?php
require_once ('./controllers/login/login.inc.php');
if(isset($_SESSION["Authorization"])){
    //$_loginInformationsController = $_SESSION["Authorization"];
}
$isLoggedIn = $_loginController->isLoggedIn();
$userName = $_loginController->getUserName();

?>

<img src="images/icons/icon-header-01.png" class="header-icon1 header-icon1 js-show-login-dropdown" alt="ICON">
                                    <div class="header-cart login-dropdown">
                                     
                                    
                                            <ul class="header-cart-wrapitem">
                                                                            
                                                                                <?php if ($isLoggedIn == true) { ?>
                                                                                            <li class="header-cart-item centered">
                                                                                                <p>Welcome <?= $userName ?></p>
                                                                                            </li>
                                                                                            
                                                                                        <hr>
                                                                                        <li header-cart-item><a href="home-03.html">My Profile</a></li>
                                                                                        <li header-cart-item><a href="home-03.html">My Orders</a></li>
                                                                                        <li header-cart-item><a href="home-03.html">Help and Contacts</a></li>
                                                                                        <hr>
                                                                                        <button class="btn btn-info" onclick="logOut()">Logout</button>
                                                                                    <?php } 
                                                                                    else {
                                                                                         ?>
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
                                                                                        <?php
                                                                                    }
                                                                                    ?>
                                                                                                                                                          
                                                                            
                                                                            
                                            </ul>
                                        
                                        </nav> 
                                    </div>