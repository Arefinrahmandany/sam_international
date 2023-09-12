@extends('backend.layouts.app')

@section('main-content')

<!-- Table Start -->

<div class="container-fluid pt-4 px-4">
    <a class="btn btn-primary" href="{{route('passports.create')}}" role="button">Add New Agent</a>
    <div class="container">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID.</th>
            <th scope="col">Passport Number</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Applying Country</th>
            <th scope="col">Agent Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Photo</th>
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
                <td></td>
                <td></td>
                <td><img src="image" style="height:80px; width: auto;"></td>
                <td>
                    <a class="btn btn-primary" href="" role="button">View</a>
                    <a class="btn btn-warning" href="" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button">Delet</a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</div>

<!-- Table End -->


@endsection
