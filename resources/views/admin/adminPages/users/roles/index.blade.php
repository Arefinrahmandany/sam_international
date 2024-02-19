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
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">

                                            @if($form_type == 'create')

                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title">Add New Role</h4>
                                            </div>

                                            <div class="basic-form">
                                                <form method="post" action="{{ route('user-role.store') }}">

                                                    @csrf

                                                    @include('validation.validate')

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>NAME</label>
                                                            <input type="text" value="" name="name" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <ul style="list-style: none; padding-left:0px; ">

                                                                @forelse ($permissions as $item )
                                                                <li>
                                                                    <label><input name="permission[]" value="{{ $item -> name }}" type="checkbox" >{{ $item -> name }}</label>
                                                                </li>
                                                                @empty
                                                                <li>
                                                                    <label>no record Found</label>
                                                                </li>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>
                                                </form>
                                            </div>
                                            @endif

                                            @if($form_type == 'edit')

                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title">Edit Permission</h4>
                                                <a href="{{ route('user-role.index') }}">Back</a>
                                            </div>

                                            <div class="basic-form">
                                                <form method="post" action="{{ route('user-role.update', $edit-> id) }}">

                                                    @csrf
                                                    @method('PUT')
                                                    @include('validation.validate')

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>NAME</label>
                                                            <input type="text" value="{{ $edit -> name  }}" name="name" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">

                                                            <ul style="list-style: none;">
                                                                @forelse (json_decode($permissions) as $item)
                                                                    <li>
                                                                        <label>
                                                                            <input @if (is_array(json_decode($edit->permissions)) && in_array($item->name, json_decode($edit->permissions))) checked @endif
                                                                                name="permission[]" value="{{ $item->name }}" type="checkbox">{{ $item->name }}
                                                                        </label>
                                                                    </li>
                                                                @empty
                                                                    <li>No Permission found</li>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </div>




                                </div>

                                <div class="card col-md-7">
                                    <div class="table-responsive">

                                        <table id="example" class="table table-striped table-hover mb-0 data-table-all">

                                            @include('validation.validate-table')

                                            <thead>
                                                <tr class="text-dark">
                                                    <tr>
                                                        <th>Sl.</th>
                                                        <th>Name</th>
                                                        <th>Slug</th>
                                                        <th>Permissions</th>
                                                        <th>CreatedAt</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($roles as $role)

                                                <tr>
                                                    <td>{{ $loop -> index +1 }}</td>
                                                    <td>{{ $role -> name }}</td>
                                                    <td>{{ $role -> slug }}</td>
                                                    <td>
                                                        <ul style="padding:0px;">
                                                            @if ($role->permissions !== null)
                                                            @forelse (json_decode($role->permissions) ?? [] as $item)
                                                                <li>{{ $item }}</li>
                                                            @empty
                                                                <!-- Handle the case where $role->permissions is an empty array or object -->
                                                            @endforelse
                                                        @else
                                                            <!-- Handle the case where $role->permissions is null -->
                                                        @endif
                                                        </ul>

                                                    </td>
                                                    <td>{{ $role -> created_at -> diffForHumans()}}</td>
                                                    <td>

                                                        <a class="btn btn-sm btn-warning"  href="{{route('user-role.edit',$role -> id)}}"><i class="fa fa-edit"></i></a>

                                                        <form method="post" action="{{ route('user-role.destroy',$role -> id) }}" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Are you sure, You want to delete?')" type="submit"><i class="fa fa-trash"></i></button>
                                                        </form>

                                                    </td>
                                                </tr>

                                                @empty

                                                <tr>
                                                    <td colspan="6" class="text-danger">No Data found.</td>
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
