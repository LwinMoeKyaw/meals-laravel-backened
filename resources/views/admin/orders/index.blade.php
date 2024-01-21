@extends('Admin.layouts.master')
@section('content')

<div class="main-content overflow-hidden">

    <div class="page-content">
        <div class="container-fluid">

            <table class="table table-success table-striped align-middle table-nowrap mb-0">
                <thead>
                    <a href="{{ url('admin/products/create') }}">
                        <button type="button" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-user-smile-line label-icon align-middle fs-16 me-2"></i> Add</button>
                    </a>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <th scope="row">{{ $order->date }}</th>
                        <th>
                            @foreach ( $order->orderDetails as $orderDetail )
                            {{ $orderDetail?->name}} <br>
                            @endforeach
                        </th>
                        <th>
                            @foreach ( $order->orderDetails as $orderDetail )
                            @if(isset($orderDetail->image))
                            <img src="{{ asset('images/'.$orderDetail->image) }}" class="rounded-3" alt="{{ $orderDetail->name }}" width="100px"><br>
                            @else
                            No Image
                            @endif
                            @endforeach

                        </th>
                        <th>
                            @foreach ( $order->orderDetails as $orderDetail )
                            {{ $orderDetail?->price}} <br>
                            @endforeach
                        </th>
                    </tr>
                    @endforeach
                </tbody>

            </table>

                {{ $orders }}

        </div>
    </div>
</div>

@endsection
