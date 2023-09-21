@extends('backend.layouts.app')

@section('main-content')


<!--**********************************
                Content body start
            ***********************************-->

<div class="content-body">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

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
</div>







@endsection
