<?php
ob_start();
session_start();

require_once "source/Cart.php";

$name = $_POST["name"];
$details = $_POST["details"];
$image = $_POST["image"];
$price = $_POST["price"];

$data = ["name" => $name, "details" => $details, "price" => intval($price), "image" => $image];

$cart = new Cart();
$cart->add($data);

return;