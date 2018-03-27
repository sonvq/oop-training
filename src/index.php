<?php

require '../vendor/autoload.php';
use Shipping\Model\v1\Product;
use Shipping\Model\v1\Order;

$product1 = new Product(10, 1.1, 0.21, 0.13, 14);
$product2 = new Product(10, 1.3, 3.1, 0.13, 14);
$product3 = new Product(10, 2.3, 0.31, 0.13, 14);
var_dump($product1->calculateProductPrice());
var_dump($product2->calculateProductPrice());
var_dump($product3->calculateProductPrice());
$order = new Order();
$order->setProducts([$product1, $product2]);
var_dump($order->calculateGrossPrice());

$order->addProducts($product3);
var_dump($order->calculateGrossPrice());

