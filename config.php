<?php

    // Composer
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/vendor/autoload.php';
    
    // Db Connections
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/repository/dbConnection.inc.php'; 
    
    // Model
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/model/login/customer.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/model/products/product.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/model/shoppingcart/shoppingcart.inc.php';
    
    // ViewModel
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/viewModel/shoppingCart/shoppingCart.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/viewModel/shop/shop.inc.php';

    //Views
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/views/bundles/bundlescss.php';
    
    // Controllers
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/controllers/login/login.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/controllers/register/register.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/controllers/shoppingcart/shoppingcart.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/controllers/products/product.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/controllers/orders/order.inc.php';
    require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/controllers/shop/shop.inc.php';
    
    // Start session
    // session_start();
    // header('Cache-Control: no-cache,');
    IF (!isset($_COOKIE["USER"]))
            {
             $cookie_value = rand(19293, 32783) + rand(3939,3894) + rand (38783,4948);
             setcookie("USER",$cookie_value);
            }

    
    if (!isset($GLOBALS["Db"]))
    { global $Db;
        $Db = new \repository\DbConnection();
        
    
    
    }
    $pdo= $Db ->createPDO();
    if (!isset($GLOBALS["Authorization"]))
    {global $Authorization; $Authorization =  new \Delight\Auth\Auth($pdo, null, null, false);}
    if (!isset($GLOBALS["_loginController"]))
    {   global $_loginController;$_loginController = new controllers\Login();}
    // Declaring Globals
   
    
 
    
   
    
   
    



?>