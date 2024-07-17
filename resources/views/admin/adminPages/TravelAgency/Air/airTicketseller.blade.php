@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}" class="text-decoration-none">Air Travel</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Air Ticket Seller</a></li>
    </ol>
</nav>

<main>
    <div class="container row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    @if($form_type == 'create')
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Ait Ticket Seller Information</h4>
                            </div>
                            <div class="basic-form">
                                <form method="post" action="{{ route('seller.store') }}">
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

                                <form method="post" action="{{ route('seller.update', $agent -> id) }}">

                                    @csrf
                                    @method('PUT')
                                    @include('validation.validate')

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>NAME</label>
                                            <input type="text" value="{{ $edit -> name }}" name="name" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="tel" value="{{ $edit -> cell }}" name="cell" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" value="{{ $edit -> email }}" name="email" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Adress</label>
                                            <input type="text" value="{{ $edit -> address }}" name="address" class="form-control">
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
                                            @forelse( $seller as $data )
                                            <tr>
                                                <th>{{ $loop->index+1 }}</th>
                                                <td><a href="{{ route('ticket.sellerShow',$data->id) }}" class="text-decoration-none">{{ $data->name }}</a></td>
                                                <td>{{ $data->cell }}</td>
                                                <td>
                                                    {{ number_format(($balance[$data->id] ?? 0), 2, '.', ',') }}
                                                </td>
                                                <td><i class="fa fa-edit"></i></td>
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
