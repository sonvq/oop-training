<?php

namespace Shipping\Model\v3;

use Shipping\Model\v3\Interfaces\Fee;

class FeeByWeight implements Fee
{

    public function feeCalculation($product)
    {
        return $product->getWeight() * Constants::COEFFICIENTS_WEIGHT;
    }

}
