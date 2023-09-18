@extends('backend.layouts.app')

@section('main-content')

<!-- form start -->


<div class="content-wrapper">
    <div class="row">
        <div class="col-12 col-lg-6 grid-margin">

<!-- Error massage code start -->

@if ($errors -> any())
<p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
@endif
@if( Session::has('success'))
<p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
@endif

<!-- Error massage code End -->

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Personal details Update</h2>
                    <form class="forms-sample" method="post" action="{{ route('passports.update', $edit_data -> id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="passpoertNumber">Passport Number</label>
                            <input type="text" name="passpoertNumber" value="{{ $edit_data -> passport_number }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number">
                        </div><br>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $edit_data -> name }}" class="form-control p-input" id="name" placeholder="Name">
                        </div><br>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $edit_data -> email }}" class="form-control p-input" id="email" placeholder="Email">
                        </div><br>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" value="{{ $edit_data -> phone }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                        </div><br>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control p-input" id="address" name="address" value="{{ $edit_data -> address }}" placeholder="Address">
                        </div><br>
                        <div class="form-floating mb-3">
                            <select class="form-select"  name="applying_country" value="{{ $edit_data -> applying_country }}" id="applying_country">
                                @forelse ( $all_countries as $country)
                                    <option @if ($edit_data -> applying_country == $country -> code ) selected @endif value="{{$country -> name }}">{{$country -> name }}</option>
                                    @empty
                                    @endforelse
                            </select>
                            <label for="floatingSelect">select applying country</label>
                        </div><br>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="agents" value="{{ $edit_data -> agent_via }}" id="agents">
                                @forelse ( $all_agents as $agents)
                                    <option @if ($edit_data -> agent_via == $agents -> id ) selected @endif value="{{$agents -> name }}">{{$agents -> name }}</option>
                                    @empty
                                    @endforelse
                            </select>
                            <label for="floatingSelect">Select Agents</label>
                        </div><br>
                        <div class="form-group">
                            <span class="input-group-text">&#2547;</span>
                            <input type="text" name="payment" value="{{ $edit_data -> amount }}" class="form-control" placeholder="Payment" >
                            <span class="input-group-text">.00</span>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
<!-- form End -->


@endsection
