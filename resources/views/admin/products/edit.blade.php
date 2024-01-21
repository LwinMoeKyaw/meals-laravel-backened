@extends('admin.layouts.master')
@section('content')
<div class="main-content">




    <div class="page-content">
        <div class="container-fluid">

            <form action="{{ url('admin/products/'.$products->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="nameInput" class="form-label">Name</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="name" value="{{ $products->name }}" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                        @error('name')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>

                        @enderror
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
                 @error('category_id')
                 <span class="text-danger text-sm">
                     {{ $message }}
                 </span>
                 @enderror
                </select>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="descriptionInput" class="form-label">Description</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="description" value="{{ $products->description }}" type="text" class="form-control" id="descriptionInput" placeholder="Enter your description">
                        @error('description')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="imageInput" class="form-label">Image</label>
                    </div>
                    <div class="col-lg-12">
                        {{-- {{ dd($products->image) }} --}}
                        <input name="image" value="{{ $products->image }}" type="file" accept="image/png, image/.jpeg, image/jpg" class="form-control" id="imageInput" placeholder="Enter your image">
                        @error('image')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                        <img src="{{ asset('images/'.$products->image) }}" alt="{{ $products->name }}" width="100px">
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="priceInput" class="form-label">Price</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="price" value="{{ $products->price }}" type="text" class="form-control" id="priceInput" placeholder="Enter your price">
                        @error('price')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Update and Leave</button>
                    <a href="{{ url("admin/products") }}" class="btn btn-outline-secondary pull-right">Cancel</a>
                </div>

            </form>
    </div>
</div>
@endsection
