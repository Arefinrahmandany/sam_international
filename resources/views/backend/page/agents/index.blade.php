@extends('backend.layouts.app')

@section('main-content')

<div class="container">
<h1 class="p-3">Agents</h1>

<a href="{{ route('agents.create') }}" type="button" class="btn btn-primary m-3">Add New Agent</a>

<div class="container">
    <div class="card">
        <div class="table-responsive">

            <table class="table table-striped text-center table-hover mb-0">
                @include('validate-table')
                <thead>
                    <tr class="text-dark">
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>E-mail</th>
                            <th>Total Passport Submit</th>
                            <th>Passport on Process</th>
                            <th>Passport Rejected</th>
                            <th>Balance (Due)</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($agents as $agent )

                    <tr>
                        <td>{{ $loop -> index + 1}}</td>
                        <td>{{ $agent -> name }}</td>
                        <td>{{ $agent -> address }}</td>
                        <td>{{ $agent -> email }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

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


</div>

@endsection
