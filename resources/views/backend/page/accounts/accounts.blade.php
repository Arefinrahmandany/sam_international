@extends('backend.layouts.app')

@section('main-content')




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
