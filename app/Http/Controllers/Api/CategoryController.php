<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Interfaces\Api\CategoryInterface;
 use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(
        private CategoryInterface $CategoryInterface
    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function all()
    {
      $categories =  $this->CategoryInterface->all();
    //   return response()->json(['data'=>$categories,'status'=>200]);
    // return new CategoryResource($categories);
    // dd($categories);

    return CategoryResource::collection($categories);
    //    dd($categories);
    }

    public function getCategoryById($id){

        $categories = $this->CategoryInterface->getCategoryById($id);
        return new CategoryResource($categories);
        // dd($categories);
    // return CategoryResource::collection($categories);

        // dd($categories);
    }

};
