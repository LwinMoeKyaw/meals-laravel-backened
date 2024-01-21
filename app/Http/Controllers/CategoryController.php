<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStore;
use App\Http\Requests\CategoryUpdate;
use App\Interfaces\CategoryInterface;
use Exception;


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
    public function index()
    {

        $categories = $this->CategoryInterface->all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStore $request)
    {
        $data = $request->only(['name']);
        try{
            $this->CategoryInterface->store($data);

           return redirect('admin/categories');
        }
        catch(Exception $e){

            return redirect()->back()->withErrors('Failed to create!');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = $this->CategoryInterface->findById($id);
        return view('admin.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdate $request, string $id)
    {
        $data = $request->only(['name']);
        $this->CategoryInterface->update($id,$data);
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->CategoryInterface->destroy($id);
        return redirect('admin/categories');
    }
}
