<?php

namespace App\Interfaces;

use Illuminate\Http\Request;



interface ProductInterface{
    public function all();
    public function store(Request $request);
    public function findById($id);
    public function update($id);
    public function destroy($id);
}

?>
