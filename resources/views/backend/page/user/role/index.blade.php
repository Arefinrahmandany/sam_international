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
                            <h4 class="card-title">Add New Role</h4>

                        </div>
                        <div class="basic-form">

                            <form method="post" action="{{ route('role.store') }}">

                                @csrf

                                @include('validate')

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

                    </div>
                </div>

                @endif


                @if($form_type == 'edit')

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edit Permission</h4>
                            <a href="{{ route('role.index') }}">Back</a>
                        </div>

                        <div class="basic-form">

                            <form method="post" action="{{ route('role.update', $edit-> id) }}">

                                @csrf
                                @method('PUT')
                                @include('validate')
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
                                                        <input @if (in_array($item ->name, json_decode($edit->permissions))) checked @endif name="permission[]" value="{{ $item -> name}}" type="checkbox">{{ $item -> name}}
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
                                    <ul style="list-style: none;">
                                        <li>{{$role -> permissions}}</li>
                                    </ul>
                                </td>
                                <td>{{ $role -> created_at -> diffForHumans()}}</td>
                                <td>

                                    <a class="btn btn-sm btn-warning"  href="{{route('role.edit',$role -> id)}}"><i class="fa fa-edit"></i></a>

                                    <form method="post" action="{{ route('role.destroy',$role -> id) }}" class="d-inline">
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



@endsection
