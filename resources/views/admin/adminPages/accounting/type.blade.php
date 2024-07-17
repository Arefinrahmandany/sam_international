@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Office Management</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}">Accounts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Accounts Types</li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card col-md-10 m-2 p-2">
                <form method="POST" action="{{ route('transaction.typeStore') }}">
                    @csrf
                    @include('validation.validate')
                    <div class="form-group">
                        <label class="form-label" for="type">Transaction Type</label>
                        <input type="text" class="form-control" name="type" id="type">
                    </div>
                    <div class="m-1 p-1">
                        <button type="submit" class="btn btn-outline-success">Add</button>
                    </div>
                </form>
            </div>
            <div class="card col-md-10 m-2 p-2">
                <table class="table table-bordered">
                    @include('validation.validate-table')
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse( $types as $data )
                        <tr>
                            <td>{{ $loop -> index+1 }}</td>
                            <td>{{ $data->type }}</td>
                            <td>
                                <form method="POST" action="{{ route('transaction.typeDestroy',$data->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
