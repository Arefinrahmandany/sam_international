@extends('backend.layouts.app')

@section('main-content')

<!--**********************************
            Content body start
        ***********************************-->

<div class="container pt-4">

    @if ($form_type == 'create')

    @include('validate')
    <div class="card-body">
        <h3>New Passport Entry</h3>
        <div class="card p-5">

            <form class="forms-sample" method="post" action="{{ route('passports.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">

                    <div class="form-group col-md-6">
                        <label for="passpoertNumber">Passport Number</label>
                        <input type="text" name="passpoertNumber" value="{{ old('passpoertNumber') }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control p-input" id="name" placeholder="Name">
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control p-input" id="email" placeholder="Email">
                    </div>

                    <div class="form-group col-6">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                    </div>

                </div>

                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{ old('address') }}" class="form-control p-input" id="address" placeholder="Address">
                </div>

                <div class="row mb-3">

                    <div class="col form-floating mb-3">
                        <select class="form-select" name="applying_country" id="applying_country">
                            <option selected="">select applying country</option>
                            @forelse ( $all_countries as $countrys)
                            <option value="{{$countrys -> code }}">{{$countrys -> name }}</option>
                            @empty
                            @endforelse
                        </select>
                        <label for="floatingSelect">select applying country</label>
                    </div>


                    <div class="col form-floating mb-3" id="floatingSelect">
                        <select class="form-select" name="agents" value="{{ old('agents') }}" id="agents">
                            <option selected="">Select Agents</option>
                            @forelse ( $all_agents as $agents)
                            <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="input-group mb-3 col">
                        <select class="form-select" name="visa_process" value="{{ old('visa_process') }}" id="visa_process">
                            <option value="visaProcess">Visa Process</option>
                            <option value="menPower">Men Power</option>
                            <option value="visa">Visa</option>
                        </select>
                    </div>

                    <div class="col input-group mb-3">
                        <span class="input-group-text">&#2547;</span>
                        <input type="text" name="payment" value="{{ old('payment') }}" class="form-control" placeholder="Payment" >
                        <span class="input-group-text">.00</span>
                    </div>

                </div>

                <div>
                    <label for="photo" class="form-label">Photos</label>
                    <input class="form-control form-control-lg" name="gallery[]" id="photo" type="file" multiple>
                </div>
                <br>



                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>

    @endif




    {{--  @if ($form_type == 'edit')
    @include('validate')
    <div class="card-body">
        <h3>Edit Passport Data</h3>
        <div class="card p-5">

            <form class="forms-sample" method="post" action="{{ route('passports.update') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">

                    <div class="form-group col-md-6">
                        <label for="passpoertNumber">Passport Number</label>
                        <input type="text" name="passpoertNumber" value="{{ old('passpoertNumber') }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $edit -> name }}" class="form-control p-input" id="name" placeholder="Name">
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $edit -> name }}" class="form-control p-input" id="email" placeholder="Email">
                    </div>

                    <div class="form-group col-6">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" value="{{ $edit -> name }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                    </div>

                </div>

                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{ $edit -> name }}" class="form-control p-input" id="address" placeholder="Address">
                </div>

                <div class="row mb-3">

                    <div class="col form-floating mb-3">
                        <select class="form-select" name="applying_country" id="applying_country">
                            <option selected="">select applying country</option>
                            @forelse ( $all_countries as $countrys)
                            <option value="{{$countrys -> code }}">{{$countrys -> name }}</option>
                            @empty
                            @endforelse
                        </select>
                        <label for="floatingSelect">select applying country</label>
                    </div>


                    <div class="col form-floating mb-3" id="floatingSelect">
                        <select class="form-select" name="agents" value="{{ $edit -> name }}" id="agents">
                            <option selected="">Select Agents</option>
                            @forelse ( $all_agents as $agents)
                            <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="input-group mb-3 col">
                        <select class="form-select" name="visa_process" value="{{ $edit -> name }}" id="visa_process">
                            <option value="visaProcess">Visa Process</option>
                            <option value="menPower">Men Power</option>
                            <option value="visa">Visa</option>
                        </select>
                    </div>
                    <br>
                    <input class="form-controler" type="file" name="photo[]" placeholder="image upload" multiple>

                    <div class="col input-group mb-3">
                        <span class="input-group-text">&#2547;</span>
                        <input type="text" name="payment" value="{{ $edit -> amount }}" class="form-control" placeholder="Payment" >
                        <span class="input-group-text">.00</span>
                    </div>

                </div>

                <div>
                    <label for="photo" class="form-label">Photos</label>
                    <input class="form-control form-control-lg" name="photo[]" id="photo" type="file" multiple><hr>


                </div>
                <br>



                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>

    @endif
 --}}

</div>

        {{--
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
                    <table class="table text-start align-middle table-bordered table-hover mb-0" id="transaction-table">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col"><input class="form-check-input" type="checkbox" id="selectAll" checked></th>
                                <th scope="col">Sl.</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Applying Country</th>
                                <th scope="col">Agent Name</th>
                                <th scope="col">Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_data as $passport)
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="selectAll"></td>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$passport->passport_number}}</td>
                                <td>{{$passport->name}}</td>
                                <td>{{$passport->email}}</td>
                                <td>{{$passport->phone}}</td>
                                <td>{{$passport->address}}</td>
                                <td>{{$passport->applying_country}}</td>
                                <td>{{$passport->agent_via}}</td>
                                <td>{{$passport->amount}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('passports.show', $passport->id) }}" role="button">View</a>
                                    <a class="btn btn-warning" href="{{ route('passports.edit', $passport->id) }}">Edit</a>
                                    <a class="btn btn-danger delete-btn" href="{{ route('passports.destroy', $passport->id) }}">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11">No Data found.</td>
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
 --}}
        <!-- #/ container -->
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
