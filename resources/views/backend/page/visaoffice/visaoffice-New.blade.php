@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4">
    <div class="container">
        @if ($errors -> any())
        <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
        @if( Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
        <form method="post" action="{{ route('visa-agency.store') }}">
            @csrf
            <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">Visa Application Agency</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="name" class="form-control col-md-10" placeholder="Office Name">
                </div>
                <div class="input-group mb-3 row">
                    <input type="tel" name="phone" class="form-control col-md-10" placeholder="Phone Number">
                </div>
                <div class="input-group mb-3 row">
                    <input type="text" name="address" class="form-control col-md-10" placeholder="Address">
                </div>
                <div class="input-group mb-3 row">
                    <input type="email" name="email" class="form-control col-md-10" placeholder="Email">
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Create</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- form End -->





@endsection
