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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transections Table</h4>
                                <div class="table-responsive">
                                        <!-- Table Start -->
                                            <div class="container-fluid pt-4 px-4">
                                                <div class="bg-light text-center rounded p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <a href="">Show All</a>
                                                    </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="col-6">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                                                <label>Show
                                                                    <select id="entriesSelect" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                                        <option value="10">10</option>
                                                                        <option value="25">25</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select>
                                                                entries
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- Search Button -->
                                                <div class="col-md-4">
                                                    <div class="row justify-content-end mb-5">
                                                        <div class="col-8">
                                                            <div class="input-group mb-3">
                                                                <label for="searchInput" type="button" class="btn btn-light col-lg-5 col-form-label" id="searchButton">Search</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control" id="searchInput" placeholder="Enter search criteria">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-bordered zero-configuration" id="transaction-table">
                                                                <thead>
                                                                    <tr class="text-dark">
                                                                        <th scope="col">Sl.</th>
                                                                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Invoice Number</th>
                                                                        <th scope="col">Payment By</th>
                                                                        <th scope="col">Description</th>
                                                                        <th scope="col">Debit</th>
                                                                        <th scope="col">Credit</th>
                                                                        <th scope="col">Balance</th>
                                                                        <th scope="col">Receive By</th>
                                                                        <th scope="col">Payment System</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ( $transections as  $transection_table)
                                                                    <tr>
                                                                        <td>{{$loop-> index + 1  }}</td>
                                                                        <td><input class="form-check-input" type="checkbox"></td>
                                                                        <td>{{$transection_table-> invoiceNumber  }}</td>
                                                                        <td>{{$transection_table-> invoiceNumber  }}</td>
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
                                                                        <td colspan="12">No transactions found.</td>
                                                                    </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- Print Button -->
                                                    <div class="row justify-content-end mb-3">
                                                        <button type="button" class="btn btn-secondary" id="printButton">Print Table</button>
                                                    </div>
                                                </div>
                                <!-- Table End -->
                        <!-- Pagination -->
                                <div class="pagination">
                            <!-- Page numbers will be displayed here -->
                                </div>
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







