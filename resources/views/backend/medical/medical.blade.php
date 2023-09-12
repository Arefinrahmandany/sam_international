@extends('backend.layouts.app')

@section('main-content')





<div class="container-fluid pt-4 px-4">
    <div class="container">
        <a class="btn btn-primary" href="{{route('medical.create')}}" role="button">Update Medical Application Status</a>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID.</th>
                        <th scope="col">Select</th>
                        <th scope="col">Passport</th>
                        <th scope="col">Medical Date</th>
                        <th scope="col">Medical Status</th>
                        <th scope="col">Expiry Date</th>
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
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Edit</a>
                            <a class="btn btn-danger" href="" role="button">Delet</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
