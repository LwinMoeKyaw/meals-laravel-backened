<?php

namespace App\Repositories\Api;

use App\Models\Category;
use App\Interfaces\Api\CategoryInterface;

class CategoryRepository implements CategoryInterface{

    public function all(){
        return Category::all();
    }
    public function getCategoryById($id)
    {
        return Category::findOrFail($id);
    }
}

?>
