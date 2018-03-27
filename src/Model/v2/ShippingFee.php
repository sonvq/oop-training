<?php

namespace Shipping\Model\V2;
Class ShippingFee {
    private $grossPrice = 0;
    
    public function calculateGrossPrice($order, $feeMethods = []) {
        if (count($order->getProducts()) > 0) {            
            foreach ($order->getProducts() as $singleProduct) {
                if (count($feeMethods) > 0) {
                    $arrFee = [];
                    foreach ($feeMethods as $feeClass => $defaultValue) {
                        $feeObject = new $feeClass($defaultValue);
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