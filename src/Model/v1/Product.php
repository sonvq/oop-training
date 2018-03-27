<?php

namespace Shipping\Model\v1;

class Product {

    private $weightCoefficient;
    private $dimensionCoefficient;
    private $weight;
    private $width;
    private $height;
    private $depth;
    private $amazonPrice;

    public function __construct($weight, $width, $height, $depth, $amazonPrice, $weightCoefficient = 11, $dimensionCoefficient = 11) {
        /*
         * Weight by kg
         */
        $this->weight = $weight;
        
        /*
         * Width by meter
         */
        $this->width = $width;
        
        /*
         * Height by meter
         */
        $this->height = $height;
        
        /*
         * Depth by meter
         */
        $this->depth = $depth;
        
        /*
         * amazonPrice by dollar
         */
        $this->amazonPrice = $amazonPrice;
        
        /*
         * $/kg
         */
        $this->weightCoefficient = $weightCoefficient;
        
        /*
         * $/m3
         */
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function getWeightCoefficient() {
        return $this->weightCoefficient;
    }

    public function getDimensionCoefficient() {
        return $this->dimensionCoefficient;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getDepth() {
        return $this->depth;
    }

    public function getAmazonPrice() {
        return $this->amazonPrice;
    }

    public function setWeightCoefficient($weightCoefficient) {
        $this->weightCoefficient = $weightCoefficient;
    }

    public function setDimensionCoefficient($dimensionCoefficient) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setDepth($depth) {
        $this->depth = $depth;
    }

    public function setAmazonPrice($amazonPrice) {
        $this->amazonPrice = $amazonPrice;
    }

    public function feeByWeight() {
        return $this->weight * $this->weightCoefficient;
    }

    public function feeByDimension() {
        return $this->width * $this->height * $this->depth * $this->dimensionCoefficient;
    }

    public function feeByProductType() {
        /*
         * TODO add implementation
         */
        return 0;
    }
    
    public function shippingFee() {
        return max($this->feeByWeight(), $this->feeByDimension(), $this->feeByProductType());
    }

    public function calculateProductPrice() {
        return $this->shippingFee() + $this->amazonPrice;
    }
}
