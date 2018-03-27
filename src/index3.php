<?php

require '../vendor/autoload.php';

$arrayFeeType = [
    \Shipping\Model\v3\Constants::WEIGHT_FEE,
    \Shipping\Model\v3\Constants::DIMENSION_FEE,
    \Shipping\Model\v3\Constants::PRODUCT_TYPE_FEE,
];

$product1 = new \Shipping\Model\v3\Product(10, 1.1, 0.21, 0.13, 14);
$product2 = new \Shipping\Model\v3\Product(10, 1.3, 3.1, 0.13, 14);
$product3 = new \Shipping\Model\v3\Product(10, 2.3, 0.31, 0.13, 14);

$order = new \Shipping\Model\v3\Order();
$order->setProducts([$product1, $product2, $product3]);

$shippingFeeService = new \Shipping\Model\v3\ShippingFee();
$shippingPrice = $shippingFeeService->calculateGrossPrice($order, $arrayFeeType);
var_dump($shippingPrice);


