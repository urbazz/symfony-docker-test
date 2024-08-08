<?php

namespace App;

class ProductService
{
    public function getAll()
    {
        $products = ['product 1', 'product 2', 'product 3'];

        return $products;
    }
}
