@extends('backend.layouts.app')

@section('main-content')




<!-- card start -->


<div class="container mt-5 mb-5">
    <div class="card-body">
        <div class="row no-gutters">
            <div class="card">
                <div class="main-body">
                    <div class="mb-4 pt-4">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <div class="mt-3">
                                                <h4>{{ $passport_data -> name}}</h4>
                                                <p class="text-muted font-size-sm">{{ $passport_data -> address}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> name}}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Passport Number</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> passport_number }}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> email}}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> phone}}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> address}}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Applying Country</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> applying_country}}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Agent</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> agent_via}}</div>
                                        </div>
                                    <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Amount</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">{{ $passport_data -> amount}}</div>
                                        </div>

                                    <hr>
                                        <div class="row">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img class="shadow" style="width:250px;height:250px;border-radius:80%;" src="{{ url('photos/passportsPaper/'. $passport_data -> photos )}}" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="{{ route('passports.edit',$passport_data -> id) }}">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- card End -->

@endsection
