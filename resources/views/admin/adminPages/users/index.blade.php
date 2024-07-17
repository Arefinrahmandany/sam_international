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
                            <h4 class="card-title">Admin Information</h4>

                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('users.store') }}">

                                @csrf
                                @include('validation.validate')

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
                                        <label for="role">Role</label>
                                        <select name="role" id="role" class="form-control">
                                            <option value="">--Select--</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role -> id }}">{{ $role -> name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <script>
                                        var check = function() {
                                            if (document.getElementById('password').value ==
                                                document.getElementById('confirm_password').value) {
                                                document.getElementById('message').style.color = 'green';
                                                document.getElementById('message').innerHTML = 'matching';
                                            } else {
                                                document.getElementById('message').style.color = 'red';
                                                document.getElementById('message').innerHTML = 'not matching';
                                            }
                                        }
                                    </script>

                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" id="password" onkeyup='check();'>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" onkeyup='check();'>
                                    </div>
                                    <span id='message'></span>
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
                            <a href="{{ route('users.index') }}">Back</a>
                        </div>

                        <div class="basic-form">

                            <form method="post" action="{{ route('users.update', $admin_data -> id) }}">

                                @csrf
                                @method('PUT')
                                @include('validation.validate')


                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="{{ $admin_data -> name }}" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" value="{{ $admin_data -> email }}" name="email" class="form-control">
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>User Name</label>
                                        <input type="text" value="{{ $admin_data -> username  }}" name="userName" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Cell</label>
                                        <input type="tel" value="{{ $admin_data -> cell  }} " name="cell" class="form-control">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-8">
                                        <label>Adress</label>
                                        <input type="text" value="{{ $admin_data -> location  }}" name="location" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Birth Date</label>
                                        <input type="date" value="{{ $admin_data-> dob }}" name="dob" class="form-control">
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


            </div>

            <div class="card col-7">
                <div class="container">
                    <div class="row">
                    <div class="col-12">
                    <div class="data_table">


                    <table id="example" class="table table-striped table-hover table-bordered">
                        @include('validation.validate-table')
                        <thead>

                            <tr class="text-dark">
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>CreatedAt</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                            <tbody>
                                @forelse ($all_admin as $per)
                                                @if ($per -> role_id !== 4)
                                                <tr>
                                                    <td>{{ $loop -> index +1 }}</td>
                                                    <td>{{ $per -> name }}</td>
                                                    <td>
                                                        @if($per->roles)
                                                            {{ $per->roles->name }}
                                                        @else
                                                            No Role Assigned
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($per -> photo == 'avatar.png')
                                                        <img src="{{ url('assets/img/avatar.png') }}" alt="user" style="width:60px; height:auto; radius:50%;">
                                                        @else
                                                        <img src="{{ asset('smssam/storage/app/public/users/'.json_decode($per->photo)) }}" alt="upload_photo" style="width:60px; height:auto; radius:50%;">
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($per -> status)
                                                            <span class="badge bg-success">Active User</span>
                                                            <a class="text-danger" href="{{ route('users.status.update', $per -> id ) }}"><i class="fa fa-times"></i></a>
                                                        @else
                                                            <span class="badge bg-danger">inactive User</span>
                                                            <a class="text-success" href="{{ route('users.status.update', $per -> id ) }}"><i class="fa fa-check"></i></a>
                                                        @endif
                                                    </td>

                                                    <td>{{ $per -> created_at -> diffForHumans()}}</td>

                                                    <td>
                                                        <a class="btn btn-sm btn-warning"  href="{{route('users.edit',$per -> id)}}"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-sm btn-danger"  href="{{route('users.tresh.update',$per -> id)}}"><i class="fa fa-trash"></i></a>
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