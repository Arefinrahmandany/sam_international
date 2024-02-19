@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}" class="text-decoration-none">Accounting</a></li>
        <li class="breadcrumb-item"><a href="#">Staff</a></li>
    </ol>
</nav>

<main>
    <div class="container row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4">
                    @if($form_type == 'create')
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Staff Information</h4>

                            </div>
                            <div class="basic-form">

                                <form method="post" action="{{ route('staff.store') }}">

                                    @csrf
                                    @include('validation.validate')

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="name">NAME <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="name" class="form-control" id="name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="cell">Phone<span class="text-danger">*</span></label>
                                            <input type="tel" value="" name="cell" class="form-control" id="cell">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" value="" name="email" class="form-control" id="email">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" value="" name="address" class="form-control" id="address">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="dob">Date of Birth</label>
                                            <input type="date" value="" name="dob" class="form-control" id="dob">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="salary">Salary</label>
                                            <input type="number" step="0.01" value="" name="salary" class="form-control" id="salary">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="department">Department</label>
                                            <input type="text" value="" name="department" class="form-control" id="department">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="detail">Detail</label>
                                            <textarea type="text" class="form-control" name="detail" id="detail"></textarea>
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
                                <a href="{{ route('staff.index') }}">Back</a>
                            </div>

                            <div class="basic-form">

                                <form method="post" action="{{ route('staff.update', $staff -> id) }}">

                                    @csrf
                                    @method('PUT')
                                    @include('validation.validate')

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="name">NAME <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $staff->name }}" name="name" class="form-control" id="name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="cell">Phone<span class="text-danger">*</span></label>
                                            <input type="tel" value="{{ $staff->cell }}" name="cell" class="form-control" id="cell">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" value="{{ $staff->email }}" name="email" class="form-control" id="email">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" value="{{ $staff->address }}" name="address" class="form-control" id="address">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="dob">Date of Birth</label>
                                            <input type="date" value="{{ $staff->dob }}" name="dob" class="form-control" id="dob">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="salary">Salary</label>
                                            <input type="number" step="0.01" value="{{ $staff->salary }}" name="salary" class="form-control" id="salary">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="department">Department</label>
                                            <input type="text" value="{{ $staff->department }}" name="department" class="form-control" id="department">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="detail">Detail</label>
                                            <textarea type="text" value="{{ $staff->detail }}" class="form-control" name="detail" id="detail"></textarea>
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
                                                <th class="text-center">Sl.</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Action</th>
                                            </tr>

                                        </thead>

                                        <tbody>

                                        @forelse ($allStaff as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop -> index +1 }}</td>
                                                <td>
                                                    <a class="text-decoration-none" href="{{ route('staff.show',$data->id)}}" > {{ $data -> name }} </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm btn-warning"  href="{{route('staff.edit',$data -> id)}}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-danger"  href="{{route('staff.trash',$data -> id)}}"><i class="fa fa-trash"></i></a>
                                                    {{--
                                                    <form method="post" action="{{ route('admin-user.destroy',$data -> id) }}" class="d-inline">
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
</main>
@endsection
