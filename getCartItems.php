<?php
ob_start();
session_start();

require_once "source/Cart.php";

$action = $_GET["action"];
$cart = new Cart();

if($action == "count"){
    echo json_encode($cart->getAllItems("count"));
}
else{
    echo json_encode($cart->getAllItems());
}

return;