<?php

namespace Shipping\Model\v2;

use Shipping\Model\v2\Interfaces\Fee;

class FeeByProductType implements Fee {

    public function __construct() {
        
    }

    public function feeCalculation($product) {
        /*
         * TODO add implementation
         */
        return 0;
    }

}
