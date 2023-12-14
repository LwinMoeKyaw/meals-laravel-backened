<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(
        private ProductInterface $ProductInterface
    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::all();

        $products = $this->ProductInterface->all();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->ProductInterface->store($request);
        return redirect('products');
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
    public function edit( $id)
    {
        $categories = Category::all();
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( string $id)
    {
        // dd(request()->all());
        $this->ProductInterface->update($id);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->ProductInterface->destroy($id);
        return redirect('products');
    }
}
