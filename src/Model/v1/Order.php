<?php

namespace Shipping\Model\v1;

class Order {

    private $products = [];

    public function __construct($products = []) {
        $this->products = $products;
    }

    public function addProducts($product) {
        return $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }

    public function setProducts($products) {
        $this->products = $products;
    }
    
    public function calculateGrossPrice() {
        $total = 0;
        if (count($this->products) > 0) {            
            foreach ($this->products as $singleProduct) {
                $total += $singleProduct->calculateProductPrice();
            }
        }
        return $total;
    }

}
