<?php

namespace controllers;


class Shop {
 
  
    private $Db;



    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = $GLOBALS["Db"];
        // Record Session Data
       
        
    }
    
    public function productsGallery($_productCategory, $_filter, $_brand, $_price_min, $_price_max)
    {  
        $Model = [];
        $query ="";
        $queryCategory ="";
        $brand = "";
        $productCategory ="";
        $price_min = "";
        $price_max = "";
        if ($_brand == null || $_brand == "undefined" || $_brand == "All") {$brand = "like '%%'";} else {$brand = " = '$_brand'";};
        if($_productCategory != null && $_productCategory != "" && $_productCategory != 40000) 
            {$productCategory =  " = '$_productCategory'";} else 
                {$productCategory = "like '%%'";};
        if($_price_max != null && $_price_max != "" ) 
        {
            $price_max = $_price_max;
            
        }
        else {
            $price_max = 3000000000000;
        }
        if($_price_min != null && $_price_min != "" ) 
        {
            $price_min = $_price_min;
            
        }
        else {
            $price_min = 0;
        }
            
        $queryCategory = "select name from product_category where id  $productCategory";
        switch ($_filter)
                {
                    case "lowToHigh": $query = "select * from product where categoryid  $productCategory and brand  $brand and price between $price_min and $price_max order by price asc";
                    break;
                    case "highToLow": $query = "select * from product where categoryid  $productCategory  and brand  $brand and price between $price_min and $price_max order by price desc";
                    break;
                    default: $query = "select * from product where categoryid  $productCategory  and brand $brand and price between $price_min and $price_max";
                    break;
                }

       
        

        $table= $this->Db->getTable($query); 
            $item = new \viewModel\Shop();
            foreach ($table as $key => $value){
               
                $product = new \Model\Product();
                $product->Id = $value["id"];
                $product->Name = $value["name"];
                $product->Brand = $value["brand"];
                $product->Price = $value["price"];
                $product->Discount = $value["discount"];
                $product->Thumbnail = $value["thumbnail"];
                array_push($item -> lstOfProducts, $product);

               
                }
            if ($queryCategory != "")
            {
                $table= $this->Db->getTable($queryCategory); 
                 foreach ($table as $key => $value)
                    {
                        $item->Category = $value["name"];
                    }         
            }

            if ($_brand != null && $_brand != "undefined" && $_brand != "All")
            {
                $item->Brand = $_brand;
            }
            
            array_push($Model, $item);
            
                return $Model;
    }
    }
    ?>