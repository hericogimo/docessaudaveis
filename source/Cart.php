<?php
ob_start();

class Cart {

    private $items;
    private $pos;

    public function __construct(){
        if(!empty($_SESSION["cart"])){
            $this->items = $_SESSION["cart"];
            $this->pos = count($_SESSION["cart"]);
        }
        else{
            $this->items = [];
            $this->pos = 0;
        }
    }   

    public function add($data){

        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        $data["position"] = $this->pos;

        $_SESSION["cart"][] = $data;
        $this->items = $_SESSION["cart"];

    }

    public function getAllItems($action = "all"){
        if(!empty($_SESSION["cart"])){    
            if($action == "count" && is_array($this->items)){
                return count($this->items);
            }
            else{
                return $this->items;
            }
        }
        else{
            return false;
        }
    }
    
    public function getItem($pos){
        return $this->items[$pos];
    }

    public function remove($pos){
        $renew = [];
        foreach($_SESSION["cart"] as $item){
            if(intval($item["position"]) !==  intval($pos)){
                $renew[] = $item;
            }
        }

        $_SESSION["cart"] = $renew;
        $this->items = $_SESSION["cart"];
    }

}