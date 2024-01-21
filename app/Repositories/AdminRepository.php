<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Interfaces\AdminInterface;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements AdminInterface{
    public function all(){
        return Admin::all();
    }
    public function store()
    {
        $admins = new Admin();
        $admins->name = request()->name;
        $admins->email = request()->email;
        $admins -> password = Hash::make(request()->Password);
        $admins->save();

    }
    public function findById($id)
    {
        return Admin::findOrFail($id);
    }

    public function  update($id)
    {
        $admins = $this->findById($id);
        $admins->name = request()->name;
        $admins->email = request()->email;
        $admins->password = request()->password;
        $admins->update();
    }
    public function destroy($id)
    {
        $admins = $this->findById($id);
        $admins->delete();
    }

}


?>
