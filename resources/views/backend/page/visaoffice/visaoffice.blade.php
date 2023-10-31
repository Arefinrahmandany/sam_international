@extends('backend.layouts.app')

@section('main-content')

<!--**********************************
            Content body start
        ***********************************-->

        <div class="container pt-4">
            <h6><a href="{{ route('visa-agency.index') }}">Back</a></h6>


            <div class="col-lg-12">
                <div class="row">
                    <div class="col-5">

                        @if($form_type == 'create')

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Add New Office Adress</h4>

                                </div>
                                <div class="basic-form">

                                    <form method="post" action="{{ route('visa-agency.store') }}">

                                        @csrf

                                        @include('validate')

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>NAME</label>
                                                <input type="text" value="" name="name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="tel" value="" name="phone" class="form-control">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Address</label>
                                                <input type="text" value="" name="address" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" value="" name="email" class="form-control">
                                            </div>

                                        </div>

                                        <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                        @endif


                        @if($form_type == 'edit')

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Edit Permission</h4>
                                    <a href="{{ route('visa-agency.create') }}">Back</a>
                                </div>

                                <div class="basic-form">

                                    <form method="post" action="{{ route('visa-agency.update', $edit-> id) }}">

                                        @csrf
                                        @method('PUT')
                                        @include('validate')

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>NAME</label>
                                                <input type="text" value="{{ $edit -> name }}" name="name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="tel" value="{{ $edit -> phone }}" name="phone" class="form-control">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Address</label>
                                                <input type="text" value="{{ $edit -> address }}" name="address" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" value="{{ $edit -> email }}" name="email" class="form-control">
                                            </div>

                                        </div>



                                        <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                        @endif


                    </div>

                    <div class="card col-7">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover mb-0">
                                @include('validate-table')
                                <thead>
                                    <tr class="text-dark">
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>E-Mail</th>
                                            <th>CreatedAt</th>
                                            <th>Action</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($visaOffice_data as $vo_data)

                                    <tr>
                                        <td>{{ $loop -> index +1 }}</td>
                                        <td>{{ $vo_data -> name }}</td>
                                        <td>{{ $vo_data -> phone }}</td>
                                        <td>{{ $vo_data -> address }}</td>
                                        <td>{{ $vo_data -> email }}</td>

                                        <td>{{ $vo_data -> created_at -> diffForHumans()}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-warning"  href="{{route('visa-agency.edit',$vo_data -> id)}}"><i class="fa fa-edit"></i></a>
                                            <form method="post" action="{{ route('visa-agency.destroy',$vo_data -> id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Are you sure, You want to delete?')" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="7" class="text-danger">No Data found.</td>
                                    </tr>
                                </tbody>

                                @endforelse

                            </table>
                        </div>
                    </div>

                </div>


                </div>
            </div>



        <!-- #/ container -->
    <!--**********************************
        Content body end
    ***********************************-->




        @endsection
