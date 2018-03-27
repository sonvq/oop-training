<?php

namespace Shipping\Model\v3;

use Shipping\Model\v3\Factory\FactoryFee;

Class ShippingFee
{
    private $grossPrice = 0;

    public function calculateGrossPrice($order, $arrayFeeType = [])
    {
        if (count($order->getProducts()) > 0) {
            foreach ($order->getProducts() as $singleProduct) {
                if (count($arrayFeeType) > 0) {
                    $arrFee = [];
                    foreach ($arrayFeeType as $index => $feeType) {
                        $feeObject = new FactoryFee($feeType);
                        $feePrice = $feeObject->feeCalculation($singleProduct);
                        $arrFee[] = $feePrice;
                    }
                }
                $productPrice = $singleProduct->getAmazonPrice() + max($arrFee);
                $this->grossPrice += $productPrice;
            }
        }
        return $this->grossPrice;
    }
}