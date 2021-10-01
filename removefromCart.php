<?php
ob_start();
session_start();

require_once "source/Cart.php";

$position = isset($_GET["position"]) ? $_GET["position"] : false;

if($position || $position == 0){
    $cart = new Cart();
    $cart->remove($position);
    echo json_encode($position);
}

else{
    echo json_encode(false);    
}

return;