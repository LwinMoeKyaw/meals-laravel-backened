@extends('admin.layouts.master')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="{{ url('admin/categories/'.$categories->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="nameInput" class="form-label">Name</label>
                    </div>
                    <div class="col-lg-9">
                        <input name="name" value="{{ $categories->name }}" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                        @error('name')
                        <span class="text-danger text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Add Leave</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
