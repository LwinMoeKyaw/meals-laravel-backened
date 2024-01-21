@extends('admin.layouts.master')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="{{ url('list') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-floating mb-3">
                    <input type="name" name="name" class="form-control" id="floatingInput" placeholder="Please Enter Your Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Please Enter Your Email">
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Please Enter Your Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Add and Leave</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
