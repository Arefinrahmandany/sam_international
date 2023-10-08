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
            <div class="pt-4 px-4 mb-3">
                <a class="btn btn-primary" href="{{route('passports.index')}}" role="button">Back</a>
            </div>
            <div class="card-body">
                <h4 class="card-title">Personal details Add</h4>
                <div class="basic-form">
                    <form class="forms-sample" method="post" action="{{ route('passports.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">

                            <div class="form-group col-md-6">
                                <label for="passpoertNumber">Passport Number</label>
                                <input type="text" name="passpoertNumber" value="{{ old('passpoertNumber') }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control p-input" id="name" placeholder="Name">
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control p-input" id="email" placeholder="Email">
                            </div>

                            <div class="form-group col-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                            </div>

                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control p-input" id="address" placeholder="Address">
                        </div>

                        <div class="row mb-3">

                            <div class="col form-floating mb-3">
                                <select class="form-select" name="applying_country" id="applying_country">
                                    <option selected="">select applying country</option>
                                    @forelse ( $all_countries as $countrys)
                                    <option value="{{$countrys -> code }}">{{$countrys -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                <label for="floatingSelect">select applying country</label>
                            </div>


                            <div class="col form-floating mb-3" id="floatingSelect">
                                <select class="form-select" name="agents" value="{{ old('agents') }}" id="agents">
                                    <option selected="">Select Agents</option>
                                    @forelse ( $all_agents as $agents)
                                    <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="input-group mb-3 col">
                                <select class="form-select" name="visa_process" value="{{ old('visa_process') }}" id="visa_process">
                                    <option value="visaProcess">Visa Process</option>
                                    <option value="menPower">Men Power</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>

                            <div class="col input-group mb-3">
                                <span class="input-group-text">&#2547;</span>
                                <input type="text" name="payment" value="{{ old('payment') }}" class="form-control" placeholder="Payment" >
                                <span class="input-group-text">.00</span>
                            </div>

                        </div>

                        <div>
                            <label for="photo" class="form-label">Photos</label>
                            <input class="form-control form-control-lg" name="photo" id="photo" type="file">
                        </div><br>



                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<!-- form End -->


@endsection
