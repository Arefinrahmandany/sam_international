@extends('admin.layout.app')

@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Medical</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none">Home</a></li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="card d-flex justify-content-center">
            <div class="row card-body">
                <form method="post" action="{{ route('medical.store') }}">
                    @csrf
                    @include('validation.validate')
                    <div class="d-flex">
                        <div class="col-md-3 m-1 p-1">
                            <label class="fomr-label" for="passport">Passport Number</label>
                            <input class="form-control" name="passport" list="passport_list" type="text" id="passport">
                            <datalist id="passport_list">
                                @foreach( $passport_data as $passport )
                                <option value="{{ $passport->passport }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col-md-2 m-1 p-1">
                            <label class="fomr-label" for="issueDate">Medical Issue Date</label>
                            <input class="form-control" name="issueDate" type="date" id="issueDate">
                        </div>
                        <div class="col-md-2 m-1 p-1">
                            <label class="fomr-label" for="expiryDate">Medical Expire Date</label>
                            <input class="form-control" name="expiryDate" type="date" id="expiryDate" placeholder="d.m.Y">
                        </div>
                        <div class="col-md-1 mt-3 m-1 p-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card d-flex justify-content-center mt-2">
            <div class="card-body">
                <table id="example" class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Passport</th>
                            <th class="text-center">Issue Date</th>
                            <th class="text-center">Expire Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $medical_data as $data )
                        <tr>
                            <td class="text-center">{{ $loop -> index + 1 }}</td>
                            <td>{{ $data -> passport }}</td>
                            <td class="text-center">{{ $data -> issueDate }}</td>
                            <td class="text-center">{{ $data -> expiryDate }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
