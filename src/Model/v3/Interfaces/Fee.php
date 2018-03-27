<?php

namespace Shipping\Model\v3\Interfaces;

interface Fee
{
    public function feeCalculation($product);
}