@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Agents</a></li>
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
                    <div class="col-lg-3">
                        @if($form_type == 'create')
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Agent Information</h4>

                                </div>
                                <div class="basic-form">

                                    <form method="post" action="{{ route('agentsBd.store') }}">

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
                                    <a href="{{ route('agentsBd.index') }}">Back</a>
                                </div>

                                <div class="basic-form">

                                    <form method="post" action="{{ route('agentsBd.update', $agent -> id) }}">

                                        @csrf
                                        @method('PUT')
                                        @include('validation.validate')

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label>NAME</label>
                                                <input type="text" value="{{ $agent -> name }}" name="name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="tel" value="{{ $agent -> cell }}" name="cell" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" value="{{ $agent -> email }}" name="email" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Adress</label>
                                                <input type="text" value="{{ $agent -> address }}" name="address" class="form-control">
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
                                                    <th class="text-center">Phone</th>
                                                    <th class="text-center">Balance</th>
                                                    <th class="text-center">Action</th>
                                                </tr>

                                            </thead>

                                            <tbody>

                                            @forelse ($agent_data as $per)
                                                <tr>
                                                    <td class="text-center">{{ $loop -> index +1 }}</td>
                                                    <td><a href="{{ route('agentsBd.show',$per->id) }}" class="text-decoration-none">{{ $per -> name }}</a></td>
                                                    <td>{{ $per -> cell }}</td>
                                                    <td class="text-end">
                                                        {{ number_format(($balance[$per->id] ?? 0), 2, '.', ',') }}
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-sm btn-warning"  href="{{route('agentsBd.edit',$per -> id)}}"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-sm btn-danger"  href="{{route('agentsBd.tresh.update',$per -> id)}}"><i class="fa fa-trash"></i></a>
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



        {{--
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4"><span>Name : {{ $all_data->name }}</span></div>
                            <div class="col-md-4"><span>Phone Number : </span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><span>Email :</span></div>
                            <div class="col-md-4"><span>Adress :</span></div>
                        </div>
                    </div>

                    </div>
                    <div class="modal-body">

                        <div class="data_table table-responsive">
                            <div class="bg-light rounded h-100 p-4">
                                <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">Date</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Debit</th>
                                            <th scope="col">Credit</th>
                                            <th scope="col">Action</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <form method="post" action="{{ route('admin-user.destroy',$per -> id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Print</button>
                    </div>

                </div>

            </div>
        </div>
        --}}


    </div>
</div>
@endsection
