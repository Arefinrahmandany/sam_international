@extends('backend.layouts.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

<!-- form start -->
<div class="container pt-4">



    <div class="col-lg-12">
        <div>

            <div>

                @if ($form_type == 'new_agent')


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Create New Agent</h4>
                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('agents.store') }}">

                                @csrf
                                @include('validate')

                                <div class="form-row d-flex">

                                    <div class="form-group col-md-5 p-2">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-5 p-2">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>

                                </div>

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-5 p-1">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-5 p-1">
                                        <label>E-mail</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                        </div>

                    </div>
                </div>
                @endif


                @if ($form_type == 'edit' )

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edit Agent Data</h4>
                            <a href="{{ route('agents.create') }}">Back</a>
                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('agents.update', $edit_data -> id) }}">

                                @csrf
                                @method('PUT')
                                @include('validate')

                                <div class="form-row d-flex">

                                    <div class="form-group col-md-5 p-2">
                                        <label>Name</label>
                                        <input type="text" value="{{ $edit_data -> name}}" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-5 p-2">
                                        <label>Address</label>
                                        <input type="text" value="{{ $edit_data -> adress}}" name="address" class="form-control">
                                    </div>

                                </div>

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-5 p-1">
                                        <label>Phone</label>
                                        <input type="tel" value="{{ $edit_data -> phone}}" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-5 p-1">
                                        <label>E-mail</label>
                                        <input type="email" value="{{ $edit_data -> email}}" name="email" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                                        </div>

                                    </div>
                                </div>




                        </div>

                    </div>
                </div>

                @endif


            </div>

            <div>
                <div class="table-responsive">

                    <table class="table table-striped text-center table-hover mb-0">
                        @include('validate-table')
                        <thead>
                            <tr class="text-dark">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>E-mail</th>
                                    <th>Total Passport Submit</th>
                                    <th>Passport on Process</th>
                                    <th>Passport Rejected</th>
                                    <th>Balance (Due)</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($agents as $agent )

                            <tr>
                                <td>{{ $loop -> index + 1}}</td>
                                <td>{{ $agent -> name }}</td>
                                <td>{{ $agent -> phone }}</td>
                                <td>{{ $agent -> address }}</td>
                                <td>{{ $agent -> email }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{ route('agents.edit',$agent -> id) }}"><i class="fa fa-edit"></i></a>
                                    <form method="post" action="{{ route('agents.destroy', $agent -> id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Are you sure, You want to delete?')" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>

                            @empty

                            <tr>
                                <td colspan="9" class="text-danger">No Data found.</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>



        </div>


        </div>
    </div>


@endsection




