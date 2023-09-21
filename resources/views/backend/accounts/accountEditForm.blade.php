@extends('backend.layouts.app')

@section('main-content')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                    <form  method="post" action="{{ route('accounts-edit.update',$edit_data -> id) }}" >
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="invoiceNumber">invoiceNumber</label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="invoiceNumber" value="{{ $edit_data -> invoiceNumber}}" name="invoiceNumber">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="debit">debit</label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" value="{{ $edit_data -> debit}}" id="debit" name="debit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="credit">credit</label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" value="{{ $edit_data -> credit}}" id="credit" name="credit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="balance">balance</label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" value="{{ $edit_data -> balance}}" id="balance" name="balance">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="description">description</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="{{ $edit_data -> description}}" id="description" name="description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Best Skill</label>
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-skill">payment by</label>
                                                <div class="col-lg-6">
                                                    <div class="d-flex">
                                                        <div>
                                                            <select class="form-control" id="val-skill" name="byAgent">
                                                                <option value="">Select an Agent</option>
                                                                @forelse ($all_agents as $agents)
                                                    <option @if ($edit_data -> receiveFrom == $agents -> code ) selected @endif value="{{$agents -> name }}">{{$agents -> name }}</option>
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
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="receiveby">receiveby</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="{{ $edit_data -> receiveby}}" id="receiveby" name="receiveby" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="paymentSystem" value="{{ $edit_data -> paymentSystem}}cash">Cash</label>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="paymentSystem" value="{{ $edit_data -> paymentSystem}}Check"> Check</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="paymentSystem" value="{{ $edit_data -> paymentSystem}}Mobile Banking"> Mobile Banking</label>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->







@endsection
