@extends('backend.layouts.app')

@section('main-content')

<!-- card Start-->

<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-md-9 col-lg-7 col-xl-5">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="d-flex text-black">
                        <div class="flex-shrink-0">
                            <img src="{{ url('image.pexels-pixabay-220453.jpg') }}" class="img-fluid" style="width: 180px; border-radius: 10px;">
                        </div>
                        <div class="flex-grow-1 ms-3">


                            <h5 class="mb-1">Personal Info</h5>
                            <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$all_data -> name }}</p>
                            <div class="d-flex justify-content-start rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                <div>
                                    <p class="small text-muted mb-1">Phone</p>
                                    <p class="mb-0">{{$all_data -> phone }}</p>
                                </div>
                                <div class="px-3">
                                    <p class="small text-muted mb-1">Email</p>
                                    <p class="mb-0">{{$all_data -> email }}</p>
                                </div>
                                <div>
                                    <p class="small text-muted mb-1">Total Due</p>
                                    <p class="mb-0">{{$all_data -> balance }}</p>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- card end-->

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
                                <th scope="col">Due</th>
                                <th scope="col">Credit</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Receive By</th>
                                <th scope="col">Payment System</th>
                                <th>Action</th>
                            </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (  $transactions as  $transection_table)
                        <tr>
                            <td><input class="form-check-input" type="checkbox" id="selectAll"></td>
                            <td>{{$transection_table->created_at->format('d/m/Y')}}</td>
                            <td>{{$transection_table->invoiceNumber}}</td>
                            <td>{{$transection_table-> receiveFrom }}</td>
                            <td>{{$transection_table-> description }}</td>
                            <td>{{$transection_table-> credit}}</td>
                            <td>{{$transection_table-> due }}</td>
                            <td>{{$transection_table-> debit}}</td>
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



@endsection
