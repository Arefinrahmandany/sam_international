
@extends('backend.layouts.app')

@section('main-content')



        <!--**********************************
            Content body start
        ***********************************-->
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <h4 class="card-title p-3">Payment Receipt</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    @if ($errors -> any())
                                    <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
                                    @endif
                                    @if( Session::has('success'))
                                    <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
                                    @endif
                                    <form class="form-valide" method="post" action="{{ route('Accounts.paymentstore') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="form-group row">
                                                    <label class="col-lg-5 col-form-label" for="invoiceNumber">Invoce Number</span>
                                                    </label>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="form-control" id="invoiceNumber" name="invoiceNumber" placeholder="Invoce Number">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-7">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-skill">payment by</label>
                                                    <div class="col-lg-6">
                                                        <div class="d-flex">
                                                            <div>
                                                                <select class="form-control" id="val-skill" name="byAgent">
                                                                    <option value="">Select an Agent</option>
                                                                    @forelse ($all_agents as $agent)
                                                                        <option value="{{ $agent->name }}">{{ $agent->name }}</option>
                                                                    @empty
                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                            <p> or </p>
                                                            <div>
                                                                <input type="text" class="form-control" id="val-skill" name="receiveFrom" placeholder="Enter Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Amount <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-password" name="amount" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Payment Detail</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password" name="forPayment" placeholder="Payment Detail">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Receive By</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input class="form-control" id="val-suggestions" name="receiveby" rows="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="radio-inline mr-3">
                                                        <input type="radio" name="paymentSystem" value="cash">Cash</label>
                                                    <label class="radio-inline mr-3">
                                                        <input type="radio" name="paymentSystem" value="check"> Check</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="paymentSystem" value="mobile banking"> Mobile Banking</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="paymentSystem" value="banking"> Banking</label>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        <!--**********************************
            Content body end
        ***********************************-->







@endsection
