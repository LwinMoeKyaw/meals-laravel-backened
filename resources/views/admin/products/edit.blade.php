@extends('admin.layouts.master')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <form action="{{ url('products/'.$products->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="nameInput" class="form-label">Name</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="name" value="{{ $products->name }}" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Category_id</label>
                    <select name="category_id" id="" class="form-control">
                    @forelse ($categories as $category)
                    <option
                    {{  $category->id == $products->category->id ? 'selected' : ''}}
                     value="{{$category->id}}">{{$category->name}}
                    </option>
                    @empty
                 @endforelse
                </select>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="descriptionInput" class="form-label">Description</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="description" value="{{ $products->description }}" type="text" class="form-control" id="descriptionInput" placeholder="Enter your description">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="imageInput" class="form-label">Image</label>
                    </div>
                    <div class="col-lg-12">
                        {{-- {{ dd($products->image) }} --}}
                        <input name="image" value="{{ $products->image }}" type="file" accept="image/png, image/.jpeg, image/jpg" class="form-control" id="imageInput" placeholder="Enter your image">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="priceInput" class="form-label">Price</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="price" value="{{ $products->price }}" type="text" class="form-control" id="priceInput" placeholder="Enter your price">
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Add Leave</button>
                </div>
            </form>
    </div>
</div>
@endsection
