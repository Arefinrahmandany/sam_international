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
                                    <td>{{$transection_table-> balance }}</td>
                                    <td>{{$transection_table-> receiveby }}</td>
                                    <td>{{$transection_table-> paymentSystem }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('accounts-edit.edit',$transection_table-> id ) }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ route('accounts-entry.destroy',$transection_table -> id ) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</i></a>
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







