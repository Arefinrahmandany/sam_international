
@extends('admin.layout.app')
@section('main-content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Passports  Data</li>
    </ol>
</nav>

<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 m-2 p-2">
                <div class="card m-2 p-2">
                    @if ( $form_type == 'create')
                    <h4>Create Service</h4>
                    <form method="POST" action="{{ route('service.store') }}">
                        @csrf
                        @include('validation.validate')

                        <div class="col-md-6">
                            <label class="form-label" for=""></label>
                            <input type="text" name="service" class="form-control" id="">
                        </div>

                        <div class="col-md-6 mt-2">
                            <button type="submit" class="btn btn-primary">Add Service</button>
                        </div>
                    </form>
                    @endif

                    @if ( $form_type == 'edit')
                    <form method="POST" action="{{ route('service.update') }}">
                        @csrf
                        @method('PUT')
                        @include('validation.validate')

                        <div class="col-md-6">
                            <label class="form-label" for=""></label>
                            <input type="text" name="service" value="{{ $data->service }}" class="form-control" id="">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
            <div class="card col-md-6 m-2">
                <div class="card-body m-1">
                    <table class="table table-responsive">
                        @include('validation.validate-table')
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (  $service as $data )
                            <tr>
                                <td> {{ $loop -> index +1 }}</td>
                                <td> {{ $data -> service }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
</main>

@endsection
