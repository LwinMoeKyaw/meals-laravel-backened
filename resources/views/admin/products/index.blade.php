@extends('Admin.layouts.master')
@section('content')

<div class="main-content overflow-hidden">

    <div class="page-content">
        <div class="container-fluid">

            <table class="table table-success table-striped align-middle table-nowrap mb-0">
                <thead>
                    <a href="{{ url('products/create') }}">
                        <button type="button" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-user-smile-line label-icon align-middle fs-16 me-2"></i> Add</button>
                    </a>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Cateogry_id</th>
                        <th scope="col">Description</th>
                        <th scope="col">image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <th>{{ $product->name }}</th>
                        <th>
                            {{$product->category? $product->category->name:"hi"}}
                        </th>
                        <th>{{ $product->description }}</th>
                        <td>
                            @if(isset($product->image))
                            <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" width="100px">
                            @else
                            No Image
                            @endif
                          </td>

                        <th>{{ $product->price }}</th>
                        <td>
                            <div class="hstack gap-3 flex-wrap">
                                <a href="{{ url('products/'.$product->id.'/edit') }}" href="javascript:void(0);"  class="link-success fs-15"><i class="ri-edit-2-line"></i>
                                </a>
                                <div class="remove">
                                    <form action="{{ url('products/'.$product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="background-color: transparent; border:none;" class="link-danger fs-15">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection
