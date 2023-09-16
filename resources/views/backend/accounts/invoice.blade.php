@extends('backend.layouts.app')

@section('main-content')


<div class="container-fluid pt-4 px-4 card-body">
    <div class="card">
        <div class="mb-3">
            <a href="{{ Route('Accounts.index') }}" class="btn text-white btn-primary">Back</a>
        </div>
        <div class="mb-3">
            <h3>Invoice</h3>
        </div>
        <div class="row">
            @if ($errors -> any())
            <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
            @endif
            @if( Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
            @endif
            <form method="post" action="{{ route('Invoice.store') }}">
                @csrf
                <div class="col-12 p-4">
                    <div class="row">
                        <div class="col-12 p-4 px-4 mb-3">
                            <div class="row">
                                <div class="col form-floating">
                                    <input type="number" class="form-control form-control-sm" name="invoiceNumber" id="invoiceNumber">
                                    <label for="invoiceNumber">Invoce Number</label>
                                </div>
                                <div class="col form-floating">
                                    <select class="form-select" name="category" id="category">
                                        <option selected="">Open category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="category">Category</label>
                                </div>
                                <div class="col form-floating">
                                    <input type="number" class="form-control form-control-sm" name="refNumber" id="refNumber">
                                    <label for="refNumber">Ref Number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-4">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="row">
                                <div class="col form-floating">
                                    <input type="text" class="form-control" name="receiveFrom" id="receiveFrom">
                                    <label for="receiveFrom">Receive From</label>
                                </div>
                                <div class="col form-floating">
                                    <input type="numer" class="form-control" name="amount" id="amount">
                                    <label for="amount">Amount</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-floating mb-3">
                                <textarea type="text" class="form-control" name="forPayment" id="forPayment"></textarea>
                                <label for="forPayment">Payment Detail</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-4">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="row">
                                <div class="col form-floating">
                                    <input type="text" class="form-control" name="receiveby" id="receiveby">
                                    <label for="receiveby">Receive By</label>
                                </div>
                                <div class="col form-floating">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paymentSystem" id="paymentSystem1" value="cash" checked>
                                        <label class="form-check-label" for="paymentSystem1">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paymentSystem" id="paymentSystem2" value="check">
                                        <label class="form-check-label" for="paymentSystem2">Check</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paymentSystem" id="paymentSystem3" value="mobileBanking">
                                        <label class="form-check-label" for="paymentSystem3">Mobile Banking</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-floating mb-3">
                                <button class="btn btn-success" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>




@endsection
