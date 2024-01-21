<?php

namespace App\Http\Controllers;

use App\Interfaces\AdminInterface;
use Illuminate\Http\Request;

class AdminController extends Controller

{
    public function __construct(
        private AdminInterface $adminRepository
    )
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = $this->adminRepository->all();
        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->adminRepository->store();
        return redirect('list');
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
        $admins = $this->adminRepository->findById($id);
        return view('admin.admins.edit',compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->adminRepository->update($id);
        return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->adminRepository->destroy($id);
        return redirect('list');
    }
}
