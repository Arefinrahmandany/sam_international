@extends('backend.layouts.app')

@section('main-content')

<div class="container">
    <h1 class="p-3">visa office</h1>

    <a href="{{ route('visa-agency.create') }}" type="button" class="btn btn-primary m-3">Add New Office Address</a>

<!-- form start -->
    <div class="container pt-4">


        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">

                    @include('validate-table')

                    <thead>
                        <tr class="text-dark">
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>E-Mail</th>
                                <th>CreatedAt</th>
                            </tr>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($visaOffice_data as $vo_data)

                        <tr>
                            <td>{{ $loop -> index +1 }}</td>
                            <td>{{ $vo_data -> name }}</td>
                            <td>{{ $vo_data -> phone }}</td>
                            <td>{{ $vo_data -> address }}</td>
                            <td>{{ $vo_data -> email }}</td>
                            <td>{{ $vo_data -> created_at -> diffForHumans()}}</td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="7" class="text-danger">No Data found.</td>
                        </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- form End -->

</div>



@endsection
