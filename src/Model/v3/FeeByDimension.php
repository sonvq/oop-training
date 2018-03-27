<?php

namespace Shipping\Model\v3;

use Shipping\Model\v3\Interfaces\Fee;

class FeeByDimension implements Fee
{

    public function feeCalculation($product)
    {
        return $product->getWidth() * $product->getHeight() * $product->getDepth() * Constants::COEFFICIENTS_DIMENSION;
    }

}
