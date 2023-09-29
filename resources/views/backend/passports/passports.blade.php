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
            <h4 class="card-title p-3">Applicant</h4>
            <div class="table-responsive">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-3"><a class="btn btn-primary" href="{{route('passports.create')}}" role="button">Add New Passport</a></h6>
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
                                            <th scope="col">Sl.</th>
                                            <th scope="col">Passport Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Applying Country</th>
                                            <th scope="col">Agent Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $all_data as $passports)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="selectAll"></td>
                                    <td>{{$loop-> index + 1}}</td>
                                    <td>{{$passports -> passport_number }}</td>
                                    <td>{{$passports -> name }}</td>
                                    <td>{{$passports -> email }}</td>
                                    <td>{{$passports -> phone }}</td>
                                    <td>{{$passports -> address }}</td>
                                    <td>{{$passports -> applying_country }}</td>
                                    <td>{{$passports -> agent_via }}</td>
                                    <td>{{$passports -> amount }}</td>
                                    <td><img src="{{ url('storage/passports/'. $passports -> photo ) }}" style="height:100px; width: auto;"></td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('passports.show',$passports -> id) }}" role="button">View</a>
                                        <a class="btn btn-warning" href="{{ route('passports.edit',$passports -> id ) }}">Edit</a>
                                        <a class="btn btn-danger  delete-btn" href="{{ route('passports.destroy',$passports -> id ) }}">Delete</i></a>
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
