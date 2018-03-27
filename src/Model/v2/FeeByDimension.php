<?php

namespace Shipping\Model\v2;

use Shipping\Model\v2\Interfaces\Fee;

class FeeByDimension implements Fee {

    private $dimensionCoefficient;

    public function getDimensionCoefficient() {
        return $this->dimensionCoefficient;
    }

    public function setDimensionCoefficient($dimensionCoefficient) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function __construct($dimensionCoefficient = 11) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function feeCalculation($product) {
        return $product->getWidth() * $product->getHeight() * $product->getDepth() * $this->dimensionCoefficient;
    }

}
