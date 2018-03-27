<?php

require '../vendor/autoload.php';
use Shipping\Model\v2\Product;
use Shipping\Model\v2\Order;
use Shipping\Model\V2\ShippingFee;

$feeMethods = [
    'Shipping\Model\v2\FeeByDimension' => 11,
    'Shipping\Model\v2\FeeByWeight' => 11,
    'Shipping\Model\v2\FeeByProductType' => []    
];

$product1 = new Product(10, 1.1, 0.21, 0.13, 14);
$product2 = new Product(10, 1.3, 3.1, 0.13, 14);
$product3 = new Product(10, 2.3, 0.31, 0.13, 14);

$order = new Order();
$order->setProducts([$product1, $product2, $product3]);

$shippingFeeService = new ShippingFee();
$shippingPrice = $shippingFeeService->calculateGrossPrice($order, $feeMethods);
var_dump($shippingPrice);


