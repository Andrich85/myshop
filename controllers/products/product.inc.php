<?php

namespace controllers;

class Product {
 
    private $Model = [];
    private $Db;



    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = new \repository\DbConnection();
        
        
    }
    public function getDescription(){}
    public function review(){}
    public function getItemById($productId){

    }
    public function productCategories(){
        $_db = $this->Db;
       $table= $_db->getTable("select * from product_category");
       foreach ($table as $key => $value){
           $item = new \model\Product();
           $item->Id = $value["id"];
           $item->Name = $value["name"];
           $item->ThumbnailS = $value["thumbnails"];
           $item->ThumbnailL = $value["thumbnaill"];
         
           array_push($this->Model, $item);
       }
      
       return  $this->Model;
    }
    public  function featuredItems(){
       $_db = $this->Db;
       $table= $_db->getTable("select * from product where featured = 1");
       foreach ($table as $key => $value){
           $item = new \model\Product();
           $item->Id = $value["id"];
           $item->Name = $value["name"];
           $item->Price = $value["price"];
           $item->Discount = $value["discount"];
           $item->New = $value["new"];
           $item->Price = $value["price"];
           $item->Thumbnail = $value["thumbnail"];
           array_push($this->Model, $item);
       }
      
       return  $this->Model;
    }
    
      public  function discountItems(){
       $_db = $this->Db;
       $table= $_db->getTable("select * from product where discount > 0");
       foreach ($table as $key => $value){
           $item = new \model\Product();
           $item->Id = $value["id"];
           $item->Name = $value["name"];
           $item->Price = $value["price"];
           $item->Discount = $value["discount"];
           $item->New = $value["new"];
           $item->Price = $value["price"];
           $item->Thumbnail = $value["thumbnail"];
           array_push($this->Model, $item);
       }
      
       return  $this->Model;
    }
    
    public  function productDetailContent($_productId){
       $_db = $this->Db;
       $table= $_db->getTable("select * from product where id = $_productId");
       foreach ($table as $key => $value){
           $item = new \model\Product();
           $item->Id = $value["id"];
           $item->Name = $value["name"];
           $item->Brand = $value["brand"];
           $item->Description = $value["description"];
           $item ->AdditionalInformations = $value ["additionalinformations"];
           $item->Price = $value["price"];
           $item->Discount = $value["discount"];
           $item->New = $value["new"];
           $item->Price = $value["price"];
           $item->Thumbnail = $value["thumbnail"];
           $item->Picture1 = $value["picture1"];
           $item->Picture2 = $value["picture2"];
           $item->Picture3 = $value["picture3"];
           $item->Picture4 = $value["picture4"];
           $item->Picture5 = $value["picture5"];
           $item->Picture6 = $value["picture6"];
           $item->Picture7 = $value["picture7"];
           $item->Picture8 = $value["picture8"];
           $item->Picture9 = $value["picture9"];
           $item->Picture10 = $value["picture10"];
           array_push($this->Model, $item);
       }
      
       return  $this->Model;
    }
    
    
    
    
    public function getPrice(){}
    public function isDiscounted(){}
    public function getDiscount(){}
    
}

?>
