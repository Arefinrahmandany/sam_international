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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('Agent-show/{id}') }}" role="button">View</a>
                            <a class="btn btn-warning" href="{{ url('Agent-edit/{id}') }}" role="button">Edit</a>
                            <a class="btn btn-danger" href="" role="button">Delet</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table End -->
    </div>
</div>


@endsection
