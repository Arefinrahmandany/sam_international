@extends('backend.layouts.app')

@section('main-content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <a class="btn btn-primary" href="{{route('agent.create')}}" role="button">Add New Agent</a>
        <!-- Table Start -->
        <div class="container">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">NID</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Balance Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $all_data as $agents)
                    <tr>
                        <td>{{$agents -> id }}</td>
                        <td>{{$agents -> name }}</td>
                        <td>{{$agents -> phone }}</td>
                        <td>{{$agents -> email }}</td>
                        <td>{{$agents -> nid }}</td>
                        <td>{{$agents -> address }}</td>
                        <td><input class="form-check-input" type="checkbox" role="switch" checked="{{$agents -> status }}"></td>
                        <td>{{$agents -> balance }}</td>
                        <td>
                            <a class="btn btn-lg btn-primary" href="{{route('agent.show', 2)}}"><i class="fe fe-eye"></i></a>
                            <a class="btn btn-lg btn-warning" href="{{ route('agent.edit', 2) }}"><i class="fe fe-edit"></i></a>
                            <a class="btn btn-lgm btn-danger" href=""><i class="fe fe-trash"></i></a>
                        </td>
                    </tr>

                    @empty

                    @endforelse

                </tbody>
            </table>
        </div>

        <!-- Table End -->
    </div>
</div>


@endsection
