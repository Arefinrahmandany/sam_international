@extends('backend.layouts.app')

@section('main-content')




<!--**********************************
                Content body start
            ***********************************-->

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 mb-3">

            <div class="col-sm-6 col-xl-3 btn-box">
                <div class="shadow gradient-1 p-3 mb-3 bg-body-tertiary rounded">
                    <a class="text-decoration-none" href="{{ route('Accounts.create') }}">
                        <div class="align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <h2 class="mb-2 text-white">Payment Receive</h2>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 btn-box">
                <div class="shadow gradient-2 p-3 mb-3 bg-body-tertiary rounded">
                    <a class="text-decoration-none" href="{{ route('expen-sheet.expense') }}" >
                        <div class="align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <h2 class="mb-2 text-white">Expense</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 btn-box">
                <div class="shadow gradient-3 p-3 mb-3 bg-body-tertiary rounded">
                    <a class="text-decoration-none" href="{{ route('balance-sheet.balancesheet') }}" >
                        <div class="align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <h2 class="mb-2 text-white">Balance Sheet</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>



<!--**********************************
            Content body start
        ***********************************-->

        <div class="row page-titles mb-3  mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <h4 class="card-title p-3">Transaction History</h4>
            <div class="table-responsive">
                <div class="bg-light text-center rounded p-4">

                    <!-- Search Button -->
                    <div class="col-4 search-container">
                        <input type="text" class="search-input" id="searchInput" placeholder="Search...">
                        <button for="searchInput" class="search-button" id="searchButton">Search</button>
                        <a href="" class="text-dark">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" id="selectAll" checked></td>
                                        <th scope="col">Date</th>

                                        <th scope="col">Invoice Number</th>
                                        <th scope="col">Payment By</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Debit</th>
                                        <th scope="col">Credit</th>
                                        <th scope="col">Due</th>
                                        <th scope="col">Balance</th>
                                        <th scope="col">Receive By</th>
                                        <th scope="col">Payment System</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (  $transections as  $transection_table)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="selectAll"></td>
                                    <td>{{$transection_table->created_at->format('d/m/Y')}}</td>
                                    <td>{{$transection_table->invoiceNumber}}</td>
                                    <td>{{$transection_table-> receiveFrom }}</td>
                                    <td>{{$transection_table-> description }}</td>
                                    <td>{{$transection_table-> debit }}</td>
                                    <td>{{$transection_table-> credit }}</td>
                                    <td>{{$transection_table-> due }}</td>
                                    <td>{{$transection_table-> balance }}</td>
                                    <td>{{$transection_table-> receiveby }}</td>
                                    <td>{{$transection_table-> paymentSystem }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('accounts-edit.edit',$transection_table-> id ) }}">Edit</a>
                                        <a class="btn btn-danger delete-btn" href="{{ route('accounts-entry.destroy',$transection_table -> id ) }}">Delete</i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="12">No Data found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Recent Sales End -->
            </div>
            <div class="container-fluid mb-3 p-4">
                <button type="button" onclick="printTable()" id="print-button" class="btn btn-primary mb-3">Print</button>
            </div>
        </div>

        <!-- #/ container -->
    <!--**********************************
        Content body end
    ***********************************-->






@endsection
