@extends('backend.layouts.app')

@section('main-content')
<!-- form start -->


<div class="content-wrapper">
    <div class="row">
        <div class="col-12 col-lg-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Personal details Add</h2>
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
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">select applying country</label>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3 col-lg.6">
                                <select class="form-select" name="agents" id="agents">
                                    <option selected="">Select Agents</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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
                            <input class="form-control form-control-lg" name="photo" id="photo" type="file">
                        </div><br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
<!-- form End -->


@endsection
