<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Interfaces\Api\ProductInterface;

class ProductController extends Controller
{
    public function __construct(
        private ProductInterface $productInterface
    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function all()
    {
      $products =  $this->productInterface->all();
    //   return response()->json(['data'=>$products,'status'=>200]);
    // return new ProductResource($products);
        // dd($products);

    return ProductResource::collection($products);
    //    dd($products);
    }

    public function getProductById($id){

        $products = $this->productInterface->getProductById($id);
        // return new ProductResource($products);
        // dd($products);
    return ProductResource::collection($products);

        // dd($products);
    }

};
