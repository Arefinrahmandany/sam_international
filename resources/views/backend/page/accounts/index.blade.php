@extends('backend.layouts.app')

@section('main-content')

 <!--**********************************
                Content body start
            ***********************************-->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <a href="{{ route('transection.create') }}">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today payment recive</p>
                                <h6 class="mb-0">&#2547;{{ $currentdebitSum }}</h6>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="{{ route('transection.expense') }}">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Total Expense</p>
                                <h6 class="mb-0">&#2547;{{ $currentcreditSum }}</h6>
                            </div>
                        </div>
                    </div>
                    </a>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">total passport recive</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Passport on work</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


 <!--**********************************
                Content body end
            ***********************************-->


@endsection
