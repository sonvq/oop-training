<?php

namespace Shipping\Model\v2\Interfaces;

interface Fee {
    public function feeCalculation($product);
}