<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface{

    public function all()
    {
        return Category::all();
    }
    public function store()
    {
        $categories = new Category();
        $categories->name = request()->name;
        $categories->save();
    }
    public function findById($id)
    {
        return Category::findOrFail($id);
    }
    public function  update($id)
    {
        $categories = $this->findById($id);
        $categories->name = request()->name;
        $categories->update();
    }
    public function destroy($id)
    {
        $categories = $this->findById($id);
        $categories->name = request()->name;
        $categories->delete();
    }
}

?>
