<?php


namespace Shipping\Model\v3\Factory;


use Shipping\Model\v3\Constants;
use Shipping\Model\v3\FeeByDimension;
use Shipping\Model\v3\FeeByProductType;
use Shipping\Model\v3\FeeByWeight;

class FactoryFee
{
    public function getFee($feeType)
    {
        if (is_null($feeType)) {
            return null;
        }
        if ($feeType === Constants::DIMENSION_FEE) {
            return new FeeByDimension();

        } else if ($feeType === Constants::WEIGHT_FEE) {
            return new FeeByWeight();

        } else if ($feeType === Constants::PRODUCT_TYPE_FEE) {
            return new FeeByProductType();
        }
        return null;
    }
}