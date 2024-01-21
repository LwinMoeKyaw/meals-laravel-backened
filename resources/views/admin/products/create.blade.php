@extends('admin.layouts.master')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="{{ url('admin/products') }}" method="POST"
            enctype="multipart/form-data">

                @csrf
                @method('POST')
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="nameInput" class="form-label">Name</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="name" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                        @error('name')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                    <label for="nameInput" class="form-label">Category_Id</label>
                    </div>
                    <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
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
                        <input name="description" type="text" class="form-control" id="descriptionInput" placeholder="Enter your description">
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
                        <input name="image" type="file" accept="image/png, image/.jpeg, image/jpg" class="form-control" id="imageInput" placeholder="Enter your image">
                        @error('image')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="priceInput" class="form-label">Price</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="price" type="text" class="form-control" id="priceInput" placeholder="Enter your price">
                        @error('price')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Add and Leave</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
