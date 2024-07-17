@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}" class="text-decoration-none">Reports</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Visa Process Reports</a></li>
    </ol>
</nav>
<main>
    <div class="container">
        <div>
            <h4>Visa Process Reports</h4>
        </div>
    </div>
    <div class="container card">
        <div class="card-body row d-flex justify-content-center">
            <div class="col-md-12">
                <form method="post" action="{{ route('visaProcessReport.index') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="date" class="form-control" name="start_date" value="{{ $startDate }}">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" name="end_date" value="{{ $endDate }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="agent" list="agent" value="{{ $searchAgent }}" placeholder="Agent Name">
                            <datalist id="agent">
                                @foreach( $agent as $data )
                                <option value="{{ $data->id }}">{{ $data->name }}
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="service" list="service" value="{{ $searchService }}" placeholder="Visa Process">
                            <datalist id="service">
                                @foreach( $service as $data )
                                <option value="{{ $data-> id }}">{{ $data->service }}
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container card mt-5 p-5">
        <div class="card-body row d-flex justify-content-center">
            <div class="col-md-12 table-responsive">
                <div class="text-end mb-2">
                    <form method="post" action="{{ route('visaProcessReport.index') }}">
                        @csrf
                        <button type="submit" class="text-primary">Clear</button>
                    </form>
                </div>
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Passport Number</th>
                            <th class="text-center">Agent</th>
                            <th class="text-center">Country</th>
                            <th class="text-center">Visa Process</th>
                            <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse( $passportItems as $data )
                        <tr>
                            <th class="text-center">{{ $loop->index+1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->passport }}</td>
                            <td>{{ optional($data->agent)->name }}</td>
                            <td>{{ $data->applying_country }}</td>
                            <td>{{ optional($data->servic)->service }}</td>
                            <td>{{ $data->amount }}</td>
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