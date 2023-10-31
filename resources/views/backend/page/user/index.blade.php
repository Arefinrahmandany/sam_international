@extends('backend.layouts.app')

@section('main-content')

<!-- form start -->
<div class="container pt-4">



    <div class="col-lg-12">
        <div class="row">
            <div class="col-5">
                @if($form_type == 'create')
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Admin Information</h4>

                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('admin-user.store') }}">

                                @csrf
                                @include('validate')

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" value="" name="email" class="form-control">
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>User Name</label>
                                        <input type="text" value="" name="username" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Cell</label>
                                        <input type="tel" value="" name="cell" class="form-control">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="">--Select--</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role -> id }}">{{ $role -> name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                        </div>

                    </div>
                </div>
                @endif

                {{--
                @if($form_type == 'edit')

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edit Admin</h4>
                            <a href="{{ route('admin-user.index') }}">Back</a>
                        </div>

                        <div class="basic-form">

                            <form method="post" action="{{ route('admin-user.update', $edit-> id) }}">

                                @csrf
                                @method('PUT')
                                @include('validate')


                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" value="" name="email" class="form-control">
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>User Name</label>
                                        <input type="text" value="" name="userName" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Cell</label>
                                        <input type="tel" value="" name="cell" class="form-control">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="">--Select--</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role -> id }}">{{ $role -> name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                        </div>

                    </div>
                </div>

                @endif

                --}}

            </div>

            <div class="card col-7">
                <div class="table-responsive">

                    <table class="table table-striped text-center table-hover mb-0">
                        @include('validate-table')
                        <thead>

                            <tr class="text-dark">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>CreatedAt</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($all_admin as $per)

                            @if ($per -> name !=='Provider')


                            <tr>
                                <td>{{ $loop -> index +1 }}</td>
                                <td>{{ $per -> name }}</td>
                                <td>{{ $per -> roles -> name }}</td>
                                <td>
                                    @if($per -> photo == 'avatar.png')
                                    <img src="{{ asset('backend/img/avatar.png') }}" alt="user" style="width:60px; height:auto;radius:50%">
                                    @endif
                                </td>
                                <td>
                                    @if ($per -> status)
                                        <span class="badge bg-success">Active User</span>
                                        <a class="text-danger" href="{{ route('admin.status.update', $per -> id ) }}"><i class="fa fa-times"></i></a>
                                    @else
                                        <span class="badge badge-danger">Unactive User</span>
                                        <a class="text-success" href="{{ route('admin.status.update', $per -> id ) }}"><i class="fa fa-check"></i></a>
                                    @endif



                                </td>
                                <td>{{ $per -> created_at -> diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{route('admin-user.edit',$per -> id)}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"  href="{{route('admin.tresh.update',$per -> id)}}"><i class="fa fa-trash"></i></a>
{{--
                                    <form method="post" action="{{ route('admin-user.destroy',$per -> id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
--}}
                                </td>
                            </tr>

                            @endif

                            @empty

                            <tr>
                                <td colspan="5" class="text-danger">No Data found.</td>
                            </tr>
                        </tbody>

                        @endforelse

                    </table>
                </div>
            </div>

        </div>


        </div>
    </div>


<!-- form End -->

@endsection
