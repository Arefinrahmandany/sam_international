@extends('admin.layout.app')

@section('main-content')


<!--**********************************
    Content body start
***********************************-->
    <div class="row page-titles mb-3  mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('agentsBd.index') }}">Agents</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('agentsBd.index') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $agent -> name }}</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 mb-3">
            <div class=" card col-lg-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8"><b>Name :</b> {{ $agent -> name }}</div>
                        <div class="col-md-8"><b>Email :</b> {{ $agent -> email }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-8"><b>Phone Number :</b> {{ $agent -> cell }}</div>
                        <div class="col-md-8"><b>Address :</b> {{ $agent -> address }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8"><b>Balance :</b> {{ $agent -> name }}</div>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Statement</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Detail</th>
                                        <th scope="col">Debit</th>
                                        <th scope="col">Credit</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!--**********************************
    Content body END
***********************************-->



@endsection
