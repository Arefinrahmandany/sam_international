@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Users</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Home</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 mb-3">


                    <!-- form start -->
<div class="container pt-4">



    <div class="col-lg-12">
        <div class="row">
            <div class="col-5">
                @if($form_type == 'create')
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Permission Information</h4>

                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('user-permission.store') }}">

                                @csrf
                                @include('validation.validate')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="" name="name" class="form-control">
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
                            <a href="{{ route('user-permission.index') }}">Back</a>
                        </div>

                        <div class="basic-form">

                            <form method="post" action="{{ route('user-permission.update', $edit-> id) }}">

                                @csrf
                                @method('PUT')
                                @include('validation.validate')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="{{ $edit -> name  }}" name="name" class="form-control">
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

                    <table class="table table-striped text-center table-hover mb-0 data-table-all">
                        @include('validation.validate-table')
                        <thead>
                            <tr class="text-dark">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>CreatedAt</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($all_permission as $per)

                            <tr>
                                <td>{{ $loop -> index +1 }}</td>
                                <td>{{ $per -> name }}</td>
                                <td>{{ $per -> slug }}</td>
                                <td>{{ $per -> created_at -> diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{route('user-permission.edit',$per -> id)}}"><i class="fa fa-edit"></i></a>
                                    <form method="post" action="{{ route('user-permission.destroy',$per -> id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>

                            @empty

                            <tr>
                                <td colspan="5" class="text-danger">No Data found.</td>
                            </tr>
							@endforelse
                        </tbody>



                    </table>
                </div>
            </div>

        </div>


        </div>
    </div>


<!-- form End -->



                </div>
            </div>




<!--**********************************
        Content body start
***********************************-->

@endsection
