@extends('admin.layout.app')

@section('main-content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--**********************************
                Content body start
            ***********************************-->

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{-- route('transection.index') --}}"  class="link-underline-light link-dark">Transection</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">pettyCash</a></li>
        </ol>
    </div>
</div>

<main>
<!-- main Section Start -->
    <div class="container-fluid px-4">
        <div class="row justify-content-center">

            <div class="card col-8 shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-body">
                    <div class="bg-danger">
                        <h4 class="card-title text-white p-2"><strong>Transection Invoice</strong></h4>
                    </div>

                    <div class="basic-form">

                        <form method="post" action="{{ route('transection.store') }}">

                            @csrf
                            @include('validation.validate')

                            <div class="row p-2 d-flex justify-content-between">

                                <div class="form-group col-md-2 p-2">
                                    <label>Trasection Number</label>
                                    <input type="text" name="voucherNo" value="{{ $voucherNo }}" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-2 p-2">
                                    <label for="date">Date</label>
                                    <input type="text" id="date" name="date" class="form-control" value="{{ $today-> format('d/m/Y') }}" readonly>
                                </div>

                            </div>

                            <div class="row p-2 d-flex justify-content-between">

                                <div class="form-group col-md-4 p-1">
                                    <label for="agentsBd">Payment Recive</label>
                                    <select class="form-select" id="agentsBd" name="agentsBd" onchange="toggleFields()">
                                        <option value="">--Select--</option>
                                        <!-- Display existing options using a loop -->
                                        @forelse ($agentsBd as $agent)
                                            <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                        @empty
                                        @endforelse
                                        <!-- Provide an option for entering a new value -->
                                        <option value="new">Or enter a new Name</option>
                                    </select>

                                    <!-- Input field for entering a new option (initially hidden) -->
                                    <input type="text" class="form-control" id="reciveFrom" name="reciveFrom" style="display: none;">
                                </div>

                                <div class="form-group col-md-2 p-1">
                                    <label class="form-label" for="transactionTypes">Type</label>
                                    <input class="form-control" name="transactionTypes" id="transactionTypes" list="types" placeholder="Transaction Types">
                                    <datalist id="types">
                                        @foreach( $transactionTypes as $data )
                                        <option value="{{ $data->type }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>

                                <div class="form-group col-md-4 p-1">
                                    <label class="form-label" for="payment">Expense Payment</label>
                                    <input class="form-control" name="payment" id="payment" list="agents" placeholder="Expense Payments">
                                    <datalist id="agents">
                                        @foreach( $agentsBd as $agent )
                                        <option value="{{ $agent->name }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>

                            </div>

                            <div class="row p-2">

                                <div class="col-md-8">
                                    <label for="detail">Payment Detail</label>
                                    <textarea type="text" name="detail" class="form-control" id="detail" rows="5"></textarea>
                                </div>

                                <div class="col-md-3 mt-3 pt-3">
                                    <div class="p-1">
                                        <label>Amount</label>
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body m-2 text-center">
                                        <input type="radio" name="paymentSystem" value="cash" class="btn-check" id="Cash" checked>
                                        <label class="btn m-1 btn-outline-primary" for="Cash">Cash</label>

                                        <input type="radio" name="paymentSystem" value="check" class="btn-check" id="Check">
                                        <label class="btn m-1 btn-outline-primary" for="Check">Check</label>

                                        <input type="radio" name="paymentSystem" value="banking" class="btn-check" id="banking">
                                        <label class="btn m-1 btn-outline-primary" for="banking">Banking</label>

                                        <input type="radio" name="paymentSystem" value="mobile_banking" class="btn-check" id="mobile_banking">
                                        <label class="btn m-1 btn-outline-primary" for="mobile_banking">Mobile Banking</label>

                                        <input type="radio" name="paymentSystem" value="due" class="btn-check" id="due">
                                        <label class="btn m-1 btn-outline-primary" for="due">Due</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="bankingDetails" style="display: none;">
                                        <!-- Your banking details select tag goes here -->
                                        <label for="bankingDetail">Banking Details:</label>
                                        <select class="form-select" name="bankingDetail" id="bankingDetail">
                                            @forelse( $bank as $data )
                                            <option value="{{ $data->bank_name }}">{{ $data->bank_name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>


        </div>
    </div>
</main>


<script>
    function toggleFields() {
        var selectElement = document.getElementById("agentsBd");
        var inputField = document.getElementById("reciveFrom");

        if (selectElement.value === "new") {
            selectElement.style.display = "none";
            inputField.style.display = "block";
        } else {
            selectElement.style.display = "block";
            inputField.style.display = "none";
        }
    }

    $(document).ready(function(){
        $('input[type=radio][name=paymentSystem]').change(function() {
            if (this.value == 'check' || this.value == 'banking') {
                $('#bankingDetails').show();
            } else {
                $('#bankingDetails').hide();
            }
        });
    });
</script>
@endsection