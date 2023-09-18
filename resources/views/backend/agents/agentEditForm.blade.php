@extends('backend.layouts.app')

@section('main-content')

<!-- form start -->
<div class="container-fluid pt-4">
    <div class="container">
        <div class="card-body">
        <div class="mb-3">
            <a href="{{ Route('agent.index') }}" class="btn btn-primary">Back</a>
        </div>

        <!-- Error massage code start -->

        @if ($errors -> any())
        <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
        @if( Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif

        <!-- Error massage code End -->


        <form method="post" action="{{ route('agent.update', $edit_data -> id) }}">
            @csrf
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Update Agent information</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="name" class="form-control col-md-10" value="{{ $edit_data -> name}}" placeholder="AGENT NAME*">
                </div>
                <div class="input-group mb-3 row">
                    <input type="tel" name="phone" class="form-control col-md-10" value="{{ $edit_data -> phone }}" placeholder="Phone Number" id="phone">
                </div>
                <div class="input-group mb-3 row">
                    <input type="email" name="email" class="form-control col-md-10" value="{{ $edit_data -> email}}" id="email" placeholder="Email address">
                </div>
                <div class="input-group mb-3 row">
                    <input type="text" name="nid" class="form-control col-md-10" value="{{ $edit_data -> nid}}" id="nid" placeholder="NID Number">
                </div>
                <div class="input-group mb-3 row">
                    <input type="Text" name="address" class="form-control col-md-10" id="address" value="{{ $edit_data -> address }}" placeholder="Address">
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>


<!-- form End -->

@endsection
