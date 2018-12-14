<?php

namespace controllers;


class Shop {
 
  
    private $Db;



    public function __construct() {
        //$this->Model = new \model\Product();
        $this->Db = $GLOBALS["Db"];
        // Record Session Data
       
        
    }
    
    public function productsGallery($_productCategory, $_filter)
    {  
        $Model = [];
        $query ="";
        
        if($_productCategory != null)
        {
            switch ($_filter)
                {
                    case "lowToHigh": $query = "select * from product where categoryid = $_productCategory order by price desc";
                    break;
                    case "highToLow": $query = "select * from product where categoryid = $_productCategory order by price asc";
                    break;
                    default: $query = "select * from product where categoryid = $_productCategory";
                    break;
                }

        }
        else
        {
             switch ($_filter)
                {
                    case "lowToHigh": $query = "select * from product  order by price desc";
                    break;
                    case "highToLow": $query = "select * from product order by price asc";
                    break;
                    default: $query = "select * from product";
                    break;
                }
            $query = "select * from product ";
        }

        $table= $this->Db->getTable($query);
            foreach ($table as $key => $value){
                $item = new \model\Product();
                $item->Id = $value["id"];
                $item->Name = $value["name"];
                $item->Price = $value["price"];
                $item->Discount = $value["discount"];
                $item->Thumbnail = $value["thumbnail"];
                
                
                array_push($Model, $item);
                }
                return $Model;
    }
    }
    ?>