<?php
namespace controllers;

require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/config.php';

class ShoppingCart
{
    public $Db;
    public $Products = [];
    public $Model = [];
    public $SessionId;
    
    public function __construct() {
        $this->Db = $GLOBALS["Db"];
        if (isset($_COOKIE["USER"]))
        {
            $this->SessionId = $_COOKIE["USER"];
        }
        
        //$this->loadUpSession();
        
    }
    
    public function getContentByOrderId($_orderId){
        $_db = $this->Db;
       $table= $_db->getTable("select * from shopping_cart where orderid ='$_orderId'");
       foreach ($table as $key => $value){
           $item = new \model\ShoppingCart();
           $item->Id = $value["id"];
           $item->OrderId = $value["orderId"];
           $item->ProductId = $value["productId"];
           $item->OrderedQty = $value["orderedqty"];
           
           
           array_push($this->Products, $item->ProductId);
           array_push($this->Model, $item);
       }
      
       return  $this->Model;
        
    }
    
    public function getContentBySessionId($_sessionId){
        $_db = $this->Db;
       $table= $_db->getTable("SELECT  distinct pr.id as productid, pr.thumbnail, pr.name as productname,  sum(orderedQty) as quantity, pr.price from shopping_cart sc, product pr WHERE sc.productId = pr.id and sessionId = '$this->SessionId' group by productId");
       foreach ($table as $key => $value){
           $item = new \viewmodel\ShoppingCart();
           $item->ProductId = $value["productid"];
           $item->Thumbnail = $value["thumbnail"];
           $item->ProductName = $value["productname"];
           $item->Quantity = $value["quantity"];
           $item->Price = $value["price"];
           
         
           array_push($this->Model, $item);
       }
      
       return  $this->Model;
        
    }
    
    public function createShoppingCart(){
        
    }
    
    //Load up session
    public function loadUpSession()
    {
//        if(!isset($_SESSION["USER"]))
//        {
//            $_SESSION["id"] = random_int(1, 5000) + random_int(1, 5000)+ random_int(1, 5000)+ random_int(1, 5000)+ random_int(1, 5000);
//            $this->SessionId = $_SESSION["id"];
//        }
//        else
//        {
//            $this->SessionId = $_SESSION["id"];
//            $this -> Model  = $this->getContentBySessionId($_SESSION["id"]);
//        }
//        if ( !isset($_SESSION["total"]) ) {
//            $_SESSION["total"] = 0;
//            foreach ($this->Products as $product)
//            {
//                $_SESSION["qty"][$product -> Id] = 0;
//                $_SESSION["amounts"][$product -> Id] = 0;
//            }
//        }
//     
    }
    //---------------------------
    //Reset
    public function reset()
    {
         $query = "DELETE from  shopping_cart WHERE sessionId =  '$this->SessionId'";
         $this->Db->runQuery($query);
         return $this->Model;
    }
    //---------------------------
    //Add 
    function addToShoppingCart($productId) {
        $this->Model = [];
        $query = "INSERT INTO shopping_cart (orderId,productId,orderedQty,userId,sessionId) VALUES (0, $productId, 1, NULL,'$this->SessionId')";
         $this->Db->runQuery($query);
         return $this->getContentBySessionId($this->SessionId);
         
         //return $this->Model;
    }
    
    //Add certain amount of product
    function addToShoppingCartByQuantity($productId, $quantity) {
        $this->Model = [];
        $query = "INSERT INTO shopping_cart (orderId,productId,orderedQty,userId,sessionId) VALUES (0, $productId, $quantity, NULL,'$this->SessionId')";
         $this->Db->runQuery($query);
         return $this->getContentBySessionId($this->SessionId);
         
         //return $this->Model;
    }
    
    //---------------------------
    //Delete 
    function deleteFromShoppingCart($productId) {
        $this->Model = [];
         $query = "DELETE from  shopping_cart WHERE productId =  $productId and sessionId =  '$this->SessionId'";
         $this->Db->runQuery($query);
         return $this->getContentBySessionId($this->SessionId);
    }
    
}

?>