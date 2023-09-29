@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
    <div class="container pt-4">

        @if ($errors -> any())
            <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif

        @if( Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">AGENT Information</h4>
                    <div class="basic-form">
                        <form method="post" action="{{route('agent.store')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>AGENT NAME</label>
                                    <input type="text" value="" name="name" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input type="tel" value="" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" value="" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>NID Number</label>
                                <input type="number" value="" name="nid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" value="" name="address" class="form-control">
                            </div>

                            <button type="submit" name="submit" class="btn btn-dark">Insert</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- form End -->












@endsection
