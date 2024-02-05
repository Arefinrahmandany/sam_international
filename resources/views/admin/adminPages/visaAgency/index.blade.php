@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Visa Office</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        <!-- form start -->
        <div class="container pt-4">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        @if($form_type == 'create')
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Visa Office Information</h4>

                                </div>
                                <div class="basic-form">

                                    <form method="post" action="{{ route('visaoffice.store') }}">

                                        @csrf
                                        @include('validation.validate')

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label>NAME</label>
                                                <input type="text" value="" name="name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="tel" value="" name="cell" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" value="" name="email" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Address</label>
                                                <input type="text" value="" name="address" class="form-control">
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
                                    <h4 class="card-title">Edit Admin</h4>
                                    <a href="{{ route('visaOffice.index') }}">Back</a>
                                </div>

                                <div class="basic-form">
                                    <form method="post" action="{{ route('visaoffice.update', $visaOffice -> id) }}">

                                        @csrf
                                        @method('PUT')

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label>NAME</label>
                                                <input type="text" value="{{ $visaOffice -> name }}" name="name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="tel" value="{{ $visaOffice -> cell }}" name="cell" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" value="{{ $visaOffice -> email }}" name="email" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Adress</label>
                                                <input type="text" value="{{ $visaOffice -> address }}" name="address" class="form-control">
                                            </div>

                                        </div>

                                        <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>

                        @endif


                    </div>

                    <div class="card col-lg-8">
                        <div class="row">
                            <div class="card-body col-lg-12">
                                <div class="data_table table-responsive">
                                    <div class="bg-light rounded h-100 p-4">
                                        <table id="example" class="table table-striped table-hover table-bordered">

                                        @include('validation.validate-table')

                                            <thead>
                                                <tr class="text-dark">
                                                    <th scope="col">Sl.</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Adress</th>
                                                    <th scope="col">Action</th>
                                                </tr>

                                            </thead>

                                            <tbody>

                                            @forelse ($visaOffice as $per)
                                                <tr>
                                                    <td scope="row">{{ $loop -> index +1 }}</td>
                                                    <td>{{ $per -> name }}</td>
                                                    <td>{{ $per -> email }}</td>
                                                    <td>{{ $per -> cell }}</td>
                                                    <td>{{ $per -> address }}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-warning"  href="{{route('visaoffice.edit',$per -> id)}}"><i class="fa fa-edit"></i></a>
                                                        {{--
                                                        <form method="post" action="{{ route('admin-user.destroy',$per -> id) }}" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                        --}}
                                                    </td>
                                                </tr>

                                            @empty
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- form End -->


    </div>
</div>
@endsection
