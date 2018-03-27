<?php

namespace Shipping\Model\v2;

use Shipping\Model\v2\Interfaces\Fee;

class FeeByWeight implements Fee {

    private $weightCoefficient;

    public function getWeightCoefficient() {
        return $this->weightCoefficient;
    }

    public function setWeightCoefficient($weightCoefficient) {
        $this->weightCoefficient = $weightCoefficient;
    }

    public function __construct($weightCoefficient = 11) {
        $this->weightCoefficient = $weightCoefficient;
    }

    public function feeCalculation($product) {
        return $product->getWeight() * $this->weightCoefficient;
    }

}
