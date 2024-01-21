<?php

namespace App\Interfaces;




interface ProductInterface{
    public function all();
    public function store();
    public function findById($id);
    public function update($id);
    public function destroy($id);
}

?>
