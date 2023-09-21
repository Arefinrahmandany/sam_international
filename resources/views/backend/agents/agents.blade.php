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
                                <h4 class="card-title">Agents Table</h4>
                                <div class="table-responsive">
                                    <div class="container-fluid pt-4 px-4">
                                        <div class="bg-light text-center rounded p-4">

                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h6 class="mb-3"><a class="btn btn-primary" href="{{route('agent.create')}}" role="button">Add New Agent</a></h6>
                                                <a href="" class="text-dark">Show All</a>
                                            </div>

                                            <!-- Search Button -->
                                            <div class="justify-content-end input-group mb-3">
                                                <div class="form-outline">
                                                    <input type="text" class="form-control" id="searchInput" placeholder="Enter search criteria">
                                                </div>
                                                <button for="searchInput" type="button" class="btn btn-primary col-form-label" id="searchButton"><i class="fas fa-search"></i></button>
                                            </div>



                                            <div class="table-responsive">
                                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                                    <thead>
                                                        <tr class="text-dark">
                                                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Balance</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ( $agents_all as  $agents_all)
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox"></td>
                                                            <td>{{$loop-> index + 1}}</td>
                                                            <td>{{$agents_all-> name}}</td>
                                                            <td>{{$agents_all-> phone}}</td>
                                                            <td>{{$agents_all-> address}}</td>
                                                            <td>{{$agents_all-> email}}</td>
                                                            <td>{{$agents_all-> balance}}</td>
                                                            <td>
                                                                <a class="btn btn-primary" href="{{route('agent.show',$agents_all-> id)}}">View</a>
                                                                <a class="btn btn-warning" href="{{route('agent.edit',$agents_all-> id)}}">Edit</a>
                                                                <a class="btn btn-danger" href="{{route('agent.destroy',$agents_all -> id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</i></a>
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
                                    </div>
                                    <!-- Recent Sales End -->
                                </div>

                                <div class="container-fluid mb-3 p-4">
                                    <button type="button" id="print-button" class="btn btn-primary mb-3">Print</button>
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
