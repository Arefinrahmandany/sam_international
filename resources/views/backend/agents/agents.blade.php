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
                <h4 class="card-title p-3">Agents Table</h4>
                <div class="table-responsive">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-3"><a class="btn btn-primary" href="{{route('agent.create')}}" role="button">Add New Agent</a></h6>
                            <a href="" class="text-dark">Show All</a>
                        </div>
                        <!-- Search Button -->
                        <div class="col-4 search-container">
                            <input type="text" class="search-input" id="searchInput" placeholder="Search...">
                            <button for="searchInput" class="search-button" id="searchButton">Search</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <tr>
                                            <td><input class="form-check-input" type="checkbox" id="selectAll" checked></td>
                                            <th>Sl.</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Balance</th>
                                            <th>Action</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $agents_all as  $agents_all)
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" id="selectAll"></td>
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




