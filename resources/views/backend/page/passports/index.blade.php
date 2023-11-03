@extends('backend.layouts.app')

@section('main-content')

<div class="container">
    <h1 class="p-3">Passports</h1>

    <a href="{{ route('passports.create') }}" type="button" class="btn btn-primary m-3">Recive New Passport</a>
</div>

<div class="container">
    <div class="card p-4">
        <div class="table-responsive p-2">

            <table id="example" class="table table-striped text-center table-hover mb-0 data-table-all">
                @include('validate-table')
                <thead>
                    <tr class="text-dark">
                        <tr>
                            <th>Sl.</th>
                            <th>Passport Number</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>Applying Country</th>
                            <th>Agent</th>
                            <th>Amount</th>
                            <th>created_at</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($all_data as $po_data )

                    <tr>
                        <td>{{ $loop -> index + 1}}</td>
                        <td>{{ $po_data -> passport_number }}</td>
                        <td>{{ $po_data -> name }}</td>
                        <td>{{ $po_data -> email }}</td>
                        <td>{{ $po_data -> address }}</td>
                        <td>{{ $po_data -> applying_country }}</td>
                        <td>{{ $po_data -> agent_via }}</td>
                        <td>{{ $po_data -> amount }}</td>
                        <td>{{ $po_data -> created_at->format('d-m-y') }}</td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="9" class="text-danger">No Data found.</td>
                    </tr>

                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>






@endsection
