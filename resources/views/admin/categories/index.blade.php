@extends('admin.layouts.master')
@section('content')

<div class="main-content overflow-hidden">

    <div class="page-content">
        <div class="container-fluid">

            <table class="table table-success table-striped align-middle table-nowrap mb-0">
                <thead>
                    <!-- Buttons with Label -->
            <a href="{{ url('admin/categories/create') }}">
                <button type="button" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-user-smile-line label-icon align-middle fs-16 me-2"></i> Add</button>
            </a>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $categories as $category )


                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <th>{{$category->name}}</th>
                        <td>
                            <div class="hstack gap-3 flex-wrap">
                                <a href="{{ url('admin/categories/'.$category->id.'/edit') }}" href="javascript:void(0);"  class="link-success fs-15"><i class="ri-edit-2-line"></i>
                                </a>
                                <div class="remove">
                                    <form action="{{ url('admin/categories/'.$category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="background-color: transparent; border:none;" class="link-danger fs-15">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                        {{-- <a class="link-danger fs-15 btn">
                                            <i class="ri-delete-bin-line"></i>
                                        </a> --}}
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
