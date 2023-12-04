<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryInterface;
use Illuminate\Http\Request;

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
        // dd('hi');
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
    public function store(Request $request)
    {
        $this->CategoryInterface->store();
        return redirect('categories');
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
    public function update(Request $request, string $id)
    {
        $this->CategoryInterface->update($id);
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->CategoryInterface->destroy($id);
        return redirect('categories');
    }
}
