@extends('backend.layouts.app')

@section('main-content')

 <!--**********************************
                Content body start
            ***********************************-->

<!-- form start -->
<div class="container pt-4">



    <div class="col-lg-12">
        <div class="row">

            <div class="col-5">

                @if ($form_type == 'payment_recive')


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Payment Received Invoice</h4>
                            <a href="{{ route('transection.expense') }}">Expense Entry</a>
                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('transection.store') }}">

                                @csrf
                                @include('validate')

                                <div class="form-row d-flex">

                                    <div class="form-group col-md-5 p-2">
                                        <label>Trasection Number</label>
                                        <input type="text" value="" name="transectionNum" class="form-control">
                                    </div>

                                    <div class="form-group col-md-5 p-2">
                                        <label>Receive By</label>
                                        <input type="text" value="" name="reciveBy" class="form-control">
                                    </div>

                                </div>

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-5 p-1">
                                        <label>Recive From</label>
                                        <input type="text" value="" name="agent" class="form-control">
                                    </div>
                                    <div class="form-group col-md-5 p-1">
                                        <label></label>
                                        <input type="text" value="" name="reciveFrom" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Payment Detail</label>
                                        <input type="text" value="" name="detail" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row d-flex">

                                    <div class="form-group col-md-6 p-1">
                                        <label>Amount</label>
                                        <input type="text" value="" name="debit" class="form-control">
                                    </div>

                                    <div class="form-group col-md-5 p-1">
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="paymentSystem" value="cash"> Cash</label>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="paymentSystem" value="check"> Check</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="paymentSystem" value="mobile banking"> Mobile Banking</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="paymentSystem" value="banking"> Banking</label>
                                    </div>
                                </div>



                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                        </div>

                    </div>
                </div>
                @endif

                @if ( $form_type == 'expense')


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Expense Invoice</h4>
                            <a href="{{ route('transection.create') }}">Payment Received Entry</a>
                        </div>

                        <div class="form-validation">

                            @include('validate')

                            <form action="{{ route('transection.store') }}" method="post">

                                @csrf

                                <div class="row">
                                    <div class="form-row form-group col-md-4">
                                        <label class="form-label">Transection Number</label>
                                        <input class="form-control" type="text" name="transectionNum">
                                    </div>

                                    <div class="form-row form-group col-md-4">
                                        <label class="form-label">Receive By</label>
                                        <input class="form-control" type="text" name="reciveBy">
                                    </div>
                                </div>



                                <div class="form-row form-group col-md-8">
                                    <label class="col-form-label">Payment Detail</label>
                                    <input type="text" class="form-control" name="details">
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="col-form-label" >Amount</label>
                                        <input type="numeric" class="form-control" name="credit">
                                    </div>


                                    <div class="form-group col-md-5 pt-4">
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="paymentSystem" value="cash"> Cash</label>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="paymentSystem" value="check"> Check</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="paymentSystem" value="mobile banking"> Mobile Banking</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="paymentSystem" value="banking"> Banking</label>
                                    </div>

                                </div>



                                <div class="form-row p-2">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                @endif


                @if ($form_type == 'edit' )


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edit Entry</h4>
                            <a href="{{ route('transection.create') }}">Back</a>
                        </div>
                        <div class="basic-form">

                            @include('validate')

                            <form method="post" action="{{ route('transection.update', $edit -> id) }}">

                                @csrf
                                @method('PUT')
                                @include('validate')

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-5 p-2">
                                        <label>Trasection Number</label>
                                        <input type="text" value="{{ $edit -> transectionNum }}" name="transectionNum" class="form-control" >
                                    </div>

                                    <div class="form-group col-md-5 p-2">
                                        <label>Receive By</label>
                                        <input type="text" value="{{ $edit -> reciveBy }}" name="reciveBy" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-5 p-1">
                                        <label>Recive From</label>
                                        <input type="text" value="{{ $edit -> agent }}" name="agent" class="form-control">
                                    </div>
                                    <div class="form-group col-md-5 p-1">
                                        <label></label>
                                        <input type="text" value="{{ $edit -> reciveFrom }}" name="reciveFrom" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Payment Detail</label>
                                        <input type="text" value="{{ $edit -> details }}" name="detail" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-4 p-1">
                                        <label>Amount</label>
                                        <input type="text" value="{{ $edit -> debit }}" name="debit" class="form-control">
                                        <input type="text" value="{{ $edit -> credit }}" name="credit" class="form-control">
                                    </div>

                                                    <div class="form-group col-md-5 p-1">
                                                        <label class="radio-inline mr-3">
                                                            <input type="radio" name="paymentSystem" value="cash"> Cash</label>
                                                        <label class="radio-inline mr-3">
                                                            <input type="radio" name="paymentSystem" value="check"> Check</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="paymentSystem" value="mobile banking"> Mobile Banking</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="paymentSystem" value="banking"> Banking</label>
                                                    </div>
                                                </div>



                                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                                            </form>

                                        </div>

                                    </div>
                                </div>




                        </div>

                    </div>
                </div>

                @endif

            </div>

            <div class="card col-7">
                <div class="table-responsive">

                    <table class="table table-striped text-center table-hover mb-0 data-table-all">
                        @include('validate-table')
                        <thead>
                            <tr class="text-dark">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Date</th>
                                    <th>Trasection Number</th>
                                    <th>Payment Detail</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                    <th>Payment System</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_Transaction as $transection )

                            <tr>
                                <td>{{ $loop -> index + 1}}</td>
                                <td>{{ $transection -> created_at->format('d-m-y') }}</td>
                                <td>{{ $transection -> transectionNum }}</td>
                                <td>{{ $transection -> details }}</td>
                                <td>{{ $transection -> debit }}</td>
                                <td>{{ $transection -> credit }}</td>
                                <td>{{ $transection -> paymentSystem }}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{ route('transection.edit',$transection -> id) }}"><i class="fa fa-edit"></i></a>
                                    <form method="post" action="{{ route('transection.destroy', $transection -> id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Are you sure, You want to delete?')" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>

                            @empty

                            <tr>
                                <td colspan="10" class="text-danger">No Data found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <ul class="nav nav-tabs">

                            <li class="nav-item"><a class="nav-link active" href="">Total Balanace = {{ $balance }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Todays Total Debit = {{ $currentdebitSum }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Todays Total Credit = {{ $currentcreditSum }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Todays Transections = {{ $currentdebitSum - $currentcreditSum }}</a></li>

                        </ul>



                    </table>

                </div>
            </div>

        </div>


        </div>
    </div>


<!-- form End -->

 <!--**********************************
                Content body end
            ***********************************-->


@endsection
