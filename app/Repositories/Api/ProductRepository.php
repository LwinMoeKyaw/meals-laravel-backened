<?php

namespace App\Repositories\Api;

use App\Interfaces\Api\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface{

    public function all(){

        return Product::all();
    }

    public function getProductById()
    {
        return Product::findOrFail();
    }

}

?>
