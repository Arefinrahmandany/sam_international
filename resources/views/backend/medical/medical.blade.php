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
            <h4 class="card-title p-3">Medical Application Status</h4>
            <div class="table-responsive">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-3"><a class="btn btn-primary" href="{{route('medical.create')}}" role="button">Update Medical Application Status</a></h6>
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
                                        <th scope="col">Passport</th>
                                        <th scope="col">Medical Date</th>
                                        <th scope="col">Medical Status</th>
                                        <th scope="col">Expiry Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $all_data as $medical)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="selectAll"></td>
                                    <td>{{$loop-> index + 1}}</td>
                                    <td>{{$medical -> passport_number  }}</td>
                                    <td>{{$medical -> medical_date }}</td>
                                    <td>{{$medical -> medicalStatus }}</td>
                                    <td>{{$medical -> expiryDate }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="" role="button">View</a>
                                        <a class="btn btn-warning" href="{{ route('medical.edit',$medical -> id ) }}">Edit</a>
                                        <a class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('medical.destroy',$medical -> id ) }}">Delete</i></a>
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
