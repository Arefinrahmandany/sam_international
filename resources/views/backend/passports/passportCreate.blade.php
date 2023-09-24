@extends('backend.layouts.app')

@section('main-content')
<!-- form start -->


<div class="content-wrapper">
        <div class="col-12 col-lg-6">
            <div class="pt-4 px-4 mb-3">
                <a class="btn btn-primary" href="{{route('passports.index')}}" role="button">Back</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Personal details Add</h2>
                        @if ($errors -> any())
                        <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
                        @endif
                        @if( Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
                        @endif
                    <form class="forms-sample" method="post" action="{{ route('passports.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="passpoertNumber">Passport Number</label>
                                <input type="text" name="passpoertNumber"  class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control p-input" id="name" placeholder="Name">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control p-input" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" class="form-control p-input" id="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control p-input" id="address" placeholder="Address">
                        </div><br>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="applying_country" id="applying_country">
                                <option selected="">select applying country</option>
                                @forelse ( $all_countries as $countrys)
                                <option value="{{$countrys -> code }}">{{$countrys -> name }}</option>
                                @empty
                                @endforelse
                            </select>
                            <label for="floatingSelect">select applying country</label>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3 col-lg.6">
                                <select class="form-select" name="agents" id="agents">
                                    <option selected="">Select Agents</option>
                                    @forelse ( $all_agents as $agents)
                                    <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div><br>
                            <div class="input-group mb-3 col-sm.6">
                                <span class="input-group-text">&#2547;</span>
                                <input type="text" name="payment" class="form-control" placeholder="Payment" >
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div>
                            <label for="photo" class="form-label">Photos</label>
                            <input class="form-control form-control-lg" name="photo" id="photo" type="file" multiple>
                        </div><br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- form End -->


@endsection
