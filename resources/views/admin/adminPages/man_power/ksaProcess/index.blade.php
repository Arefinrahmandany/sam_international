@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Man Power</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none">KSA Process</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none text-danger">Home</a></li>
    </ol>
</nav>

<main>
    <div class="container pt-4 px-4">
        <div class="row g-4 mb-3">
            <h5>KSA Visa Proccess</h5>
            <div class="card">
                <div class="card-body">
                    <form method="get" action="{{ route('visaHome.index') }}">
                        @csrf
                        <div class="row d-flex">
                            <div class="col-md-6">
                                <div class="m-1 p-1 d-flex">
                                    <div class="m-1">
                                        <label class="form-label" for="">From</label>
                                        <input class="form-control" value="{{ $dateFrom }}" type="date" name="dateFrom">
                                    </div>
                                    <div class="m-1">
                                        <label class="form-label" for="">To</label>
                                        <input class="form-control" value="{{ $dateTo }}" type="date" name="dateTo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="m-1 p-1">
                                    <input type="text" class="form-control" name="search" list="search_for" id="search">
                                    <datalist id="search_for">
                                        <option value="Passport in Embassy"></option>
                                        <option value="Passport in Mofa"></option>
                                        <option value="Passport in BMET"></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </datalist>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search">Search</i></button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success" type="button" onclick="printDiv()"><i class="fa fa-print"></i> Print</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body" id="printDiv">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Passport Number</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $data as $data )
                            <tr>

                                <td class="text-center">{{ $loop -> index + 1 }}</td>
                                <td>{{ $data->passport }}</td>
                                <td></td>
                                <td></td>
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
