@extends('backend.layouts.app')

@section('main-content')


<!-- Cards start-->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col pt-4 mb-3">
            <div class="card gradient-1">
                <a class="text-white" href="{{ route('Accounts.invoice') }}" >
                    <div class="card-body">
                        <h3 class="card-title">Invoice</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col pt-4 mb-3">
            <div class="card gradient-1">
                <a class="text-white" href="{{ route('ExpenseSheet.Expense') }}" >
                    <div class="card-body">
                        <h3 class="card-title">Expenses</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col pt-4 mb-3">
            <div class="card gradient-1">
                <a class="text-white" href="{{ route('BalanceSheet.index') }}" >
                    <div class="card-body">
                        <h3 class="card-title">Balance Sheet</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Cards end-->



<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="col align-self-start">
                                <h4 class="card-title">Last Transaction</h4>
                            </div>
                            <div class="col align-self-end">
                                <div class="d-flex mb-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter search criteria" id="searchInput">
                                        <button type="button" class="btn btn-primary" id="searchButton">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Sl.</th>
                                                <th>Date</th>
                                                <th>receiveFrom</th>
                                                <th>Detail</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                                <th>Transection Type</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ( $accounts_all_data as $transection)


                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>{{ $transection -> created_at}}</td>
                                                <td>{{ $transection -> receiveFrom}}</td>
                                                <td>{{ $transection -> description}}</td>
                                                <td>{{ $transection -> debit}}</td>
                                                <td>{{ $transection -> credit}}</td>
                                                <td>{{ $transection -> paymentSystem}}</td>
                                                <td>{{ $transection -> balance}}</td>
                                            </tr>
                                            @empty

                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-secondary" id="printButton">Print Table</button>
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



@endsection
